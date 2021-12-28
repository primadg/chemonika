<?php

namespace App\Http\Controllers\filters;

use Illuminate\Http\Request;

interface FiltersInterface
{
    function getFiltersAdminAction(Request $request);
    function addFilterAction(Request $request);
    function deleteFilterAction(Request $request,$id);

}
