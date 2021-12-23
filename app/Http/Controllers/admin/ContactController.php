<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function getContacts(Request $request){
        $value = $request->cookie('lang') ?? "ukr";
        $contact = DB::table('contact_table_' . $value)->first();
        return view("admin.contact",['contact'=>$contact]);
    }



    function editContacts(){

    }
}
