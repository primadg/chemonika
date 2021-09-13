<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    function homeAction(Request $request){

        return view("posts", [
            'products' => DB::table('product_ukrs')->simplePaginate(10)
        ]);
    }
}
