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
        return view($value.'.products', [
            'products' => DB::table('product_'.$value.'s')->simplePaginate(9)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.products_".self::$language.".create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $lang = $request->cookie('lang');
        switch ($lang){
            case "ru":$new_product = new Product_ru(); break;
            case "en":$new_product = new Product_en(); break;
            default: $new_product = new Product_ukr();
        }

        $path = $request->file('img')->store('img');

        $new_product->name = $request->name;
        $new_product->group = $request->group;
        $new_product->description = $request->description;
        $new_product->field_of_usage = $request->field_of_usage;
        $new_product->Product_usage = $request->product_usage;
        $new_product->Standart = $request->standart;
        $new_product->Package = $request->package;
        $new_product->Storage = $request->stogare;
        $new_product->img = $path;
        $new_product->save();
        return redirect()->back()->with('success','ok');
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
        $value = $request->cookie('lang') ?? "ukr";
        return view($value.'.product', [
            'product' => DB::table('product_'.$value.'s')->where('id',$id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
