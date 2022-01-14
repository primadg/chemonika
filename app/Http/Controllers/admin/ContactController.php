<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\contacts\contact_table_en;
use App\Models\contacts\contact_table_ru;
use App\Models\contacts\contact_table_ukr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function getContacts(Request $request){
        $value = $request->cookie('lang') ?? "ukr";
        $contact = DB::table('contact_table_' . $value)->first();
        $tel = json_decode($contact->tel1, true);
        $email = json_decode($contact->email1, true);
//        dd(json_decode($tel, true));
//        $arr = ['a'=>"+38 (067) 686 92 91",'b'=>"+38 (050) 332 66 44"];
//        dd(json_encode($arr));
        return view("admin.contact",['contact'=>$contact, "lang"=>$value, "tels"=>$tel, "emails"=>$email]);
    }



    function editContacts(Request $request){
        $post = $request->post();
        $value = $request->cookie('lang') ?? "ukr";
//        dd(json_decode($post["telData"], true));
        $product = $this->getModelObjectByLang($value);

        $product->tel1 = $post["telData"];
//        $product->tel2 = $post["tel2"];
        $product->email1 = $post["emailData"];
        $product->adrs = $post["adrs"];
        $product->link_tg = $post["link_tg"];
        $product->link_skype = $post["link_skype"];
        $product->link_facebook = $post["link_facebook"];

        $product->save();

        return redirect()->back();
    }

    private function getModelObjectByLang($lang){
        switch ($lang) {
            case "ru":
                $product = contact_table_ru::find(1);
                break;
            case "en":
                $product = contact_table_en::find(1);
                break;
            default:
                $product = contact_table_ukr::find(1);
                break;
        }
        return $product;
    }
}
