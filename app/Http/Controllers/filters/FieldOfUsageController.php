<?php

namespace App\Http\Controllers\filters;

use App\Http\Controllers\Controller;
use App\Models\filters\FieldOfUsages;
use App\Models\filters\Groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FieldOfUsageController extends Controller implements FiltersInterface
{
    //
    function getFiltersAdminAction(Request $request)
    {
        $lang = $request->cookie('lang') ?? "ukr";
        $filters = DB::table("field_of_usages")->where("lang", $lang)->get();
        foreach ($filters as $key => $filter) {
            $filters[$key]->count = count(DB::table('product_' . $lang . 's')->where("field_of_usage", "like", $filter->name)->get());
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
        return response($filter->id,200);
    }
    function deleteFilterAction(Request $request)
    {
        $post = $request->post();
        $filter = FieldOfUsages::find($post["id"]);
        $filter->delete();
        return response("deleted",200);
    }
    function editFilterAction(Request $request){
        $post = $request->post();
        $filter = FieldOfUsages::find($post["id"]);
        $filter->name = $post["name"];
        $filter->lang = $post["lang"];
        $filter->save();
        return response("edited",200);
    }

}
