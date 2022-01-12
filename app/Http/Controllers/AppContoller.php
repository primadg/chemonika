<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class AppContoller extends Controller
{
    private $language;


    public function IndexAction(Request $request)
    {
        $value = $request->cookie('lang') ?? "ukr";
        $products = DB::table('product_' . $value . 's');
        if ($value == 'ru' || $value == 'en') {
            $products = $products->orderBy('pos_id', 'desc')
                ->where("visible", "!=", 0)
                ->where("draft","!=",1)
                ->where("name","!=",null)
                ->take(3)->get();
            foreach ($products as $item) {
                $item->id = $item->pos_id;
            }
        } else
            $products = $products->orderBy('id', 'desc')
                ->where("visible", "!=", 0)
                ->where("draft","!=",1)
                ->where("name","!=",null)
                ->take(3)->get();
        return view($value . '.index', ['products' => $products, "partners"=>$this->getPartnerArray()]);


    }

    private function getPartnerArray(): ?array
    {
        $pos_arr = DB::table("position_p")->where("id",1)->first();
        $pos_arr = json_decode($pos_arr->array);
        $result = null;
        foreach ($pos_arr as $value){
            $result[] = Partner::find($value);
        }
        return $result;
    }

    public function setLangEng()
    {
        return redirect()->back()->withCookie(cookie('lang', 'en', 180));
    }

    public function setLangRu()
    {
        return redirect()->back()->withCookie(cookie('lang', 'ru', 180));
    }

    public function setLangUkr()
    {
        return redirect()->back()->withCookie(cookie('lang', 'ukr', 180));
    }


    public function SendEmail(Request $request)
    {
        if ($this->emailValidate($request->post('email')) || $this->telValidate($request->post('email'))) {
            Mail::to(env('MAIL_TO_NAME'))->send(new \App\Mail\Mail($request->post('name'),
                $request->post('email'), $request->post('text')));
            return Response('ok', 200);
        } else {
            return Response('bad data', 506);
        }
    }

    private function emailValidate($email)
    {
        return preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email);
    }

    private function telValidate($email)
    {
        return preg_match('/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im', $email);
    }


}
