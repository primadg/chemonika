<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppContoller extends Controller
{
    private static $language;
    public static function setLocale($locale){
       self::$language=$locale;
    }
    public function IndexAction()
    {
            return view('index');
    }
}
