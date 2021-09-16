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


        $value = $request->cookie('lang') ?? "ukr";
        $products = DB::table('product_' . $value . 's');
        if ($request->get('group'))
            $products =  $products->where('group',$request->get('group'));
//        dd($products);
        if ($request->get('usage'))
            $products= $products->where('field_of_usage',$request->get('group'));
         $products= $products->simplePaginate(9);

        if ($value == 'ru' || $value == 'en') {
            foreach ($products->items() as $item) {
                $item->id = $item->pos_id;
            }
        }


        return view($value . '.products', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $main_id = DB::table('product_ukrs')->orderBy('id','desc')->first()->id;
        $main_id++;
        return view("card",['main_id'=>$main_id, 'entries' => []]);
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
        if(!$request->file('img')){
            return redirect()->back()->with('error','Загрузите файл');
        }
        $ex = $request->file('img')->extension();
        if(!($ex=='jpg'||$ex=='png')){
            return redirect()->back()->with('error','Неверный формат загруженного файла');
        }
        $path = $request->file('img')->store('public/img');
        $new_product->img = Storage::url($path);

        try {


        $new_product->name = $request->name;
        $new_product->group = $request->group;
        $new_product->description = $request->description;
        $new_product->field_of_usage = $request->field_of_usage;
        $new_product->Product_usage = $request->product_usage;
        $new_product->Standart = $request->standart;
        $new_product->Package = $request->package;
        $new_product->Storage = $request->stogare;


        if ($is_ukr) {
            $new_product->save();
            $first = new Product_ru();
            $second = new Product_en();
            $first->pos_id = $new_product->id;
            $first->img = $path;
            $first->save();
            $second->pos_id = $new_product->id;
            $second->img = $path;
            $second->save();
        } else {
            $main_table->img = $path;
            $main_table->save();
            $new_product->pos_id = $main_table->id;
            $new_product->save();
            $second_product->pos_id = $main_table->id;
            $second_product->img = $path;
            $second_product->save();

        }

        return redirect('admin');
        }catch (\Exception $e){
            return redirect()->back()->with('error','Ошибка');
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
            'entries'=>$entries
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
        return view("ukr.card_edit", ['product' => $product, 'entries'=>$entries]);
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
}
