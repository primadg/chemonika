<?php

namespace App\Http\Controllers\filters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller  implements FiltersInterface
{
    function getFiltersAdminAction(Request $request)
    {
        return view("admin.group",["filters"=>DB::table("groups")]);
    }
    function addFilterAction(Request $request)
    {
        //
    }
    function deleteFilterAction(Request $request,$id)
    {
        DB::table('product_ens')->where("id",$id)->first()->delete();
    }
}
