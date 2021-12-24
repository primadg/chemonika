<?php

namespace App\Http\Controllers\admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    function getPartnersAdminAction(Request $request)
    {
        return view("admin.partners",["partners"=>DB::table("partners")]);
    }



    function storePartnerAction(Request $request){
        $ex = $request->file('img')->extension();
        if (!($ex == 'jpg' || $ex == 'png')) {
            return redirect()->back()->with('error', 'Неверный формат загруженного файла');
        }
        $path = $request->file('img')->store('public/img');
        $partner = new Partner();
        $partner->url = $path;
    }

    function deletePartnerAction(Request $request, $id)
    {
        DB::table('product_ens')->where("id",$id)->first()->delete();

    }
}
