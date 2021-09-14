<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppContoller extends Controller
{
    private $language;


    public function IndexAction(Request $request)
    {
        $value = $request->cookie('lang') ?? "ukr";
        $products =  DB::table('product_'.$value.'s')->orderBy('id','desc')->take(3)->get();

            return view($value.'.index', ['products'=>$products]);
    }

    public function setLangEng(){
        return redirect()->back()->withCookie(cookie('lang', 'en', 180));
    }
    public function setLangRu(){
        return redirect()->back()->withCookie(cookie('lang', 'ru', 180));
    }
    public function setLangUkr(){
        return redirect()->back()->withCookie(cookie('lang', 'ukr', 180));
    }
}