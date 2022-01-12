<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product_en;
use App\Models\Product_ru;
use App\Models\Product_ukr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function visiblePost(Request $request, $id){
        $this->changeVisible($id);
        return response('ok',200);
    }

    function homeAction(Request $request)
    {
        $posts = count(DB::table("product_ukrs")->get());
        $groups = count(DB::table("groups_f")->get());
        $usages = count(DB::table("field_of_usages")->get());
        $partners = count(DB::table("partners")->get());
        return view("admin.index",
            [
                "posts" => $posts,
                "groups" => $groups,
                "usages" => $usages,
                "partners"=>$partners
            ]);
    }


    function postAction(Request $request)
    {

        return view("admin.posts", [
            'products' => DB::table('product_ukrs')->simplePaginate(10)
        ]);
    }


    function deletePost($id)
    {
        try {
            $ru_id = DB::table('product_rus')->where('pos_id', $id)->first()->id;
            DB::table('product_rus')->delete($ru_id);
        } catch (\Exception $exception) {

        }
        try {
            $en_id = DB::table('product_ens')->where('pos_id', $id)->first()->id;
            DB::table('product_ens')->delete($en_id);
        } catch (\Exception $exception) {

        }


        DB::table('product_ukrs')->delete($id);


        return redirect('admin');
    }

    public function editRu($id)
    {
        $product = DB::table('product_rus')->where('pos_id', $id)->first();
        $entries = DB::table('table_ps')->where('post_id', $id)->get();
        return view("ru.card_edit", ['product' => $product, 'main_id' => $id, 'entries' => $entries]);
    }


    public function editEn($id)
    {
        $product = DB::table('product_ens')->where('pos_id', $id)->first();
        $entries = DB::table('table_ps')->where('post_id', $id)->get();
        return view("en.card_edit", ['product' => $product, 'main_id' => $id, 'entries' => $entries]);
    }

    public function updatePosts(Request $request)
    {
        $id = $request->id;
        $lang = $request->lang;

        $is_ukr = false;
        switch ($lang) {
            case "ru":
                $product = Product_ru::find($id);
                break;
            case "en":
                $product = Product_en::find($id);
                break;
            default:
                $product = Product_ukr::find($id);
                $is_ukr = true;
                break;
        }


        if ($request->file('img')) {
            $path = $request->file('img')->store('public/img');

            $ex = $request->file('img')->extension();
            if (!($ex == 'jpg' || $ex == 'png')) {
                return redirect()->back()->with('error', 'Неверный формат загруженного файла');
            }
            $product->img = Storage::url($path);
            // todo дописать
            if ($is_ukr) {
                $product_en = Product_en::find($this->getSecondaryTableId('product_ens', $id));
                $product_ru = Product_ru::find($this->getSecondaryTableId('product_rus', $id));
                $product->img = $product_ru->img = $product_en->img = Storage::url($path);
                $product_ru->save();
                $product_en->save();
                unset($product_ru);
                unset($product_en);
            } else {
                $product_en = Product_en::find(DB::table("product_ens")->where('pos_id', $product->pos_id)->first()->id);
                $product_ru = Product_ru::find(DB::table("product_rus")->where('pos_id', $product->pos_id)->first()->id);
                $product_ukr = Product_ukr::find(DB::table("product_rus")->where('id', $product->pos_id)->first()->id);
                $product_ukr->img = $product_ru->img = $product_en->img = Storage::url($path);
                $product_ru->save();
                $product_en->save();
                $product_ukr->save();
                unset($product_ru);
                unset($product_en);
                unset($product_ukr);
            }
        }

        if ($this->check_required_fields([$request->name, $request->group, $request->description])) {
            return redirect()->back()->with('error', 'Заполните обязательные поля (со звездочкой)');
        }


        $draft = $this->check_required_fields([$request->name, $request->group, $request->description]);

        try {
            $product->name = $request->name;
            $product->group = $request->group;
            $product->description = $request->description;
            $product->field_of_usage = $request->field_of_usage;
            $product->Product_usage = $request->product_usage;
            $product->Standart = $request->standart;
            $product->Package = $request->package;
            $product->Storage = $request->stogare;
            $product->draft = $draft;
            $product->save();

            return redirect()->back();
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    private function getSecondaryTableId($table, $main_id)
    {
        return DB::table($table)->where('pos_id', $main_id)->first()->id;
    }

    private function check_required_fields(array $params): bool
    {
        foreach ($params as $value) {
            if (!$value) {
                return true;
            }
        }
        return false;
    }

    private function changeVisible($id){
        $product = Product_ukr::find($id);
        $value = !$product->visible;
        $product->visible = $value;
        $product->save();
        $product = Product_ru::find($id);
        $product->visible = $value;
        $product->save();
        $product = Product_en::find($id);
        $product->visible = $value;
        $product->save();
    }




}
