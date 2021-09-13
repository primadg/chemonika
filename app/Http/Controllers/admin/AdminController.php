<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    function homeAction(Request $request)
    {

        return view("posts", [
            'products' => DB::table('product_ukrs')->simplePaginate(10)
        ]);
    }

    function deletePost($id)
    {
        try {
            $ru_id = DB::table('product_rus')->where('pos_id', $id)->first()->id;
            DB::table('product_rus')->delete($ru_id);
        } catch (\Exception $exception) {

        }
        try {
            $en_id = DB::table('product_ens')->where('pos_id', $id)->first()->id;
            DB::table('product_ens')->delete($en_id);
        } catch (\Exception $exception) {

        }


        DB::table('product_ukrs')->delete($id);


        return redirect()->back();
    }
}
