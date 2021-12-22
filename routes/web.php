<?php



use Http\Cookie;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AppContoller;
//use App\Http\Controllers\Admin\AdminController;

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
    Route::get('/', [\App\Http\Controllers\AppContoller::class, 'IndexAction']);
    Route::get('/ru', [\App\Http\Controllers\AppContoller::class, 'SetLangRu']);
    Route::get('/en', [\App\Http\Controllers\AppContoller::class, 'SetLangEng']);
    Route::get('/ukr', [\App\Http\Controllers\AppContoller::class, 'SetLangUkr']);
    Route::post('/send',[\App\Http\Controllers\AppContoller::class, 'SendEmail'] );

    Route::resource('products', \App\Http\Controllers\admin\ProductController::class)->only(['index', 'show']);
    Route::resource('table', \App\Http\Controllers\TableController::class);

});


Route::group(['middleware' => ['role:admin'], ], function () {
    Route::namespace('admin')->get("/admin", [App\Http\Controllers\admin\AdminController::class,'homeAction' ]);
    Route::namespace('admin')->get("/posts", [App\Http\Controllers\admin\AdminController::class,'postAction' ]);
    Route::namespace('admin')->get("/contact", [App\Http\Controllers\admin\AdminController::class,'contactAction' ]);
    Route::namespace('admin')->get("/groups", [App\Http\Controllers\admin\AdminController::class,'groupsAction' ]);
    Route::namespace('admin')->get("/usages", [App\Http\Controllers\admin\AdminController::class,'usagesAction' ]);
    Route::namespace('admin')->get("/partners", [App\Http\Controllers\admin\AdminController::class,'partnersAction' ]);
    Route::resource('products', \App\Http\Controllers\admin\ProductController::class)->only([
        'create', 'store', 'update','edit', ]);
    Route::resource('products_admin', \App\Http\Controllers\admin\ProductController::class);
    Route::get("/delete/{id}", [\App\Http\Controllers\admin\AdminController::class,'deletePost', ]);
    Route::get("/editRu/{id}", [\App\Http\Controllers\admin\AdminController::class,'editRu', ]);
    Route::get("/test", function(){
        return view('test');
    });
    Route::get("/editEn/{id}", [\App\Http\Controllers\admin\AdminController::class,'editEn', ]);
    Route::post("/updatePosts/", [\App\Http\Controllers\admin\AdminController::class,'updatePosts', ]);
});


require __DIR__.'/auth.php';
