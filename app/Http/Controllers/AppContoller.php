<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppContoller extends Controller
{
    private $language;


    public function IndexAction(Request $request)
    {
        $value = $request->cookie('lang') ?? "ukr";
            return view($value.'.index');
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
