<?php


use http\Cookie;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\AppContoller;
use App\HTTP\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()]
Route::group([], function() {
    Route::get('/', [AppContoller::class, 'IndexAction']);
    Route::get('/ru', [AppContoller::class, 'SetLangRu']);
    Route::get('/en', [AppContoller::class, 'SetLangEng']);
    Route::get('/ukr', [AppContoller::class, 'SetLangUkr']);
    Route::resource('products', \App\Http\Controllers\admin\ProductController::class)->only(['index', 'show']);

});


Route::group(['middleware' => ['role:admin'], ], function () {
    Route::get("/admin", [AdminController::class,'homeAction' ]);
    Route::resource('products', \App\Http\Controllers\admin\ProductController::class)->only([
        'create', 'store', 'update','edit', 'destroy']);
});


require __DIR__.'/auth.php';
