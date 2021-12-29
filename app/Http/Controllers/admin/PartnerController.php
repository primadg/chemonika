<?php

namespace App\Http\Controllers\admin;

use App\Models\Partner;
use App\Models\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    function getPartnersAdminAction(Request $request)
    {
        return view("admin.partners",["partners"=>Partner::all()]);
    }

    function storePartnerAction(Request $request){

        $ex = $request->file('img')->extension();
        if (!($ex == 'jpg' || $ex == 'png')) {
            return response(" wrong extension", 510);
        }
        $path = $request->file('img')->store('public/img');

        $partner = new Partner();
        $partner->url = Storage::url($path);;
        $partner->save();
        return response("saved", 200);
    }

    function deletePartnerAction(Request $request)
    {
        $post = $request->post();
        $partner = Partner::find($post["id"]);
        $partner->delete();
        return response("deleted",200);
    }

    function swapPartnerAction(Request $request){
        $post = $request->post();
        $position = Position::find(1);
        $position->array = $post["pos_array"];
        $position->save();
        return response("swapped",200);
    }

}
