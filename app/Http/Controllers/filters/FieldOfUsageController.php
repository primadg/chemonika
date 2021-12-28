<?php

namespace App\Http\Controllers\filters;

use App\Http\Controllers\Controller;
use App\Models\filters\FieldOfUsages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FieldOfUsageController extends Controller implements FiltersInterface
{
    //
    function getFiltersAdminAction(Request $request)
    {
        $lang = $request->cookie('lang') ?? "ukr";
        $filters = DB::table("groups_f")->where("lang", $lang)->get();
        foreach ($filters as $key => $filter) {
            $filters[$key]->count = count(DB::table('product_' . $lang . 's')->where("group", "like", $filter->name)->get());
        }
        return view("admin.usage",["filters"=>$filters,"lang"=>$lang]);
    }
    function addFilterAction(Request $request)
    {
        $post = $request->post();
        $filter = new FieldOfUsages();
        $filter->name = $post["name"];
        $filter->lang = $post["lang"];
        $filter->save();
    }
    function deleteFilterAction(Request $request,$id)
    {
        DB::table('product_ens')->where("id",$id)->first()->delete();
    }

}
