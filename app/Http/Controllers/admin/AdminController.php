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

    function homeAction(Request $request)
    {

        return view("posts", [
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
        $product =  DB::table('product_rus')->where('pos_id',$id)->first();
        $entries = DB::table('table_ps')->where('post_id', $id)->get();
        return view("ru.card_edit",['product'=>$product, 'main_id'=>$id, 'entries'=>$entries]);
    }
    public function editEn($id)
    {
        $product =  DB::table('product_ens')->where('pos_id',$id)->first();
        $entries = DB::table('table_ps')->where('post_id', $id)->get();
        return view("en.card_edit",['product'=>$product, 'main_id'=>$id, 'entries'=>$entries]);
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
                break;
        }




        if($request->file('img')){
            $path = $request->file('img')->store('public/img');
            $product->img = Storage::url($path);
            $ex = $request->file('img')->extension();
            if(!($ex=='jpg'||$ex=='png')){
                return redirect()->back()->with('error','Неверный формат загруженного файла');
            }
        }

        try {


        $product->name = $request->name;
        $product->group = $request->group;
        $product->description = $request->description;
        $product->field_of_usage = $request->field_of_usage;
        $product->Product_usage = $request->product_usage;
        $product->Standart = $request->standart;
        $product->Package = $request->package;
        $product->Storage = $request->stogare;

        $product->save();

        return redirect()->back();
        } catch (\Exception $ex){
            return redirect()->back()->with('error','Ошибка');
        }
    }


}
