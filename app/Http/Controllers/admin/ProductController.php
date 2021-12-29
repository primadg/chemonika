<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product_en;
use App\Models\Product_ru;
use App\Models\Product_ukr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Products;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $chose_group = '';
        $chose_usage = '';
        $f = "";
        $s = "";
        $value = $request->cookie('lang') ?? "ukr";
        switch ($value) {
            case 'ukr':
                $chose_group = $chose_usage = "Обрати";
                $f = "Харчова";
                $s = "Косметична";
                break;
            case 'ru':
                $chose_group = $chose_usage = "Выбрать";
                $f = "Пищевая";
                $s = "Косметическая";
                break;
            case 'en':
                $chose_group = $chose_usage = "Select";
                $f = "Food";
                $s = "Cosmetic";
                break;
        }
        $products = DB::table('product_' . $value . 's')->where("visible","!=",0);
        if ($request->get('group')) {
            $products = $products->where('group', "like", $request->get('group'));
            $chose_group = $request->get('group');
        }
        if ($request->get('usage')) {
            $usg = $request->get('usage');
            if($usg=="Other"||$usg=="Інші"||$usg=="Другие") {
                $products = $products->where('field_of_usage', "!=",$f )->where('field_of_usage', "!=",$s);
            }else {
                $products = $products->where('field_of_usage',"like", $request->get('usage'));

            }
            $chose_usage = $request->get('usage');
        }
        $products = $products->simplePaginate(9);
        if ($value == 'ru' || $value == 'en') {
            foreach ($products->items() as $item) {
                $item->id = $item->pos_id;
            }
        }

        $groups = DB::table("groups_f")->where("lang",$value)->get();
        $usages = DB::table("field_of_usages")->where("lang",$value)->get();

        return view($value . '.products', [
            'products' => $products,
            'usage' => $chose_usage,
            'group' => $chose_group,
             "usages"=>$usages,
            "groups" => $groups,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $main_id = DB::table('product_ukrs')->orderBy('id', 'desc')->first();
        if ($main_id) {
            $main_id = $main_id->id;
            $main_id++;
        } else
            $main_id = 1;
        return view("card", ['main_id' => $main_id, 'entries' => []]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $lang = $request->lang;

        $is_ukr = false;
        switch ($lang) {
            case "ru":
                $new_product = new Product_ru();
                $second_product = new Product_en();
                $main_table = new Product_ukr();
                break;
            case "en":
                $new_product = new Product_en();
                $second_product = new Product_ru();
                $main_table = new Product_ukr();
                break;
            default:
                $new_product = new Product_ukr();
                $is_ukr = true;
                break;
        }
        if (!$request->file('img')) {
            return redirect()->back()->with('error', 'Загрузите файл');
        }
        $ex = $request->file('img')->extension();
        if (!($ex == 'jpg' || $ex == 'png')) {
            return redirect()->back()->with('error', 'Неверный формат загруженного файла');
        }
        $path = $request->file('img')->store('public/img');
        $new_product->img = Storage::url($path);


        if ($this->check_required_fields([$request->name, $request->group, ])) {
            return redirect()->back()->with('error', 'Заполните обязательные поля (со звездочкой)');
        }


        $draft = $this->check_required_fields([$request->field_of_usage, $request->product_usage,
            $request->standart, $request->package, $request->stogare]);

        try {


            // обязательные поля
            $new_product->name = $request->name;
            $new_product->group = $request->group;

            // необязательные поля
            $new_product->description = $request->description;
            $new_product->field_of_usage = $request->field_of_usage;
            $new_product->Product_usage = $request->product_usage;
            $new_product->Standart = $request->standart;
            $new_product->Package = $request->package;
            $new_product->Storage = $request->stogare;


            if ($is_ukr) {
                $new_product->draft = $draft;
                $new_product->save();
                $first = new Product_ru();
                $second = new Product_en();
                $first->pos_id = $new_product->id;
                $first->img = $new_product->img;
                $first->draft = $draft;
                $first->save();
                $second->pos_id = $new_product->id;
                $second->img = $new_product->img;
                $second->draft = $draft;
                $second->save();
            } else {
                $main_table->img = $new_product->img;
                $main_table->draft = $draft;
                $main_table->save();
                $new_product->pos_id = $main_table->id;
                $new_product->draft = $draft;
                $new_product->save();
                $second_product->pos_id = $main_table->id;
                $second_product->img = $new_product->img;
                $second_product->draft = $draft;;
                $second_product->save();

            }

            return redirect('admin');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(int $id, Request $request)
    {
        $entries = DB::table('table_ps')->where('post_id', $id)->get();
        $value = $request->cookie('lang') ?? "ukr";

        if ($value == 'ru' || $value == 'en')
            $product = DB::table('product_' . $value . 's')->where('pos_id', $id)->first();
        else
            $product = DB::table('product_' . $value . 's')->where('id', $id)->first();

        return view($value . '.product', [
            'product' => $product,
            'entries' => $entries
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @param $lang
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = DB::table('product_ukrs')->where('id', $id)->first();
        $entries = DB::table('table_ps')->where('post_id', $id)->get();
        return view("ukr.card_edit", ['product' => $product, 'entries' => $entries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

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
}
