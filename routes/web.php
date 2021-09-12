<?php

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

Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function() {
    Route::get('/', [AppContoller::class, 'IndexAction']);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get("/admin", [AdminController::class, 'homeAction']);
    Route::resource('products', \App\Http\Controllers\admin\ProductController::class);
});


require __DIR__.'/auth.php';
