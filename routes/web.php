<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\admin\AdminController;
use  \App\Http\Controllers\admin\ProductController;
use \App\Http\Controllers\TableController;

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

    Route::resource('products', "ProductController")->only(['index', 'show']);
    Route::resource('table', "TableController");

});


Route::group(['middleware' => ['auth'], ], function () {
    Route::get("/home", [\App\Http\Controllers\admin\AdminController::class,'homeAction' ]);
    Route::get("/admin", [\App\Http\Controllers\admin\AdminController::class,'homeAction' ]);
    Route::get("/posts", [App\Http\Controllers\admin\AdminController::class,'postAction' ]);
    Route::get("/contact", [App\Http\Controllers\admin\ContactController::class,'getContacts' ]);
    Route::get("/groups", [App\Http\Controllers\filters\GroupController ::class,'getFiltersAdminAction' ]);
    Route::get("/usages", [App\Http\Controllers\filters\FieldOfUsageController::class,'getFiltersAdminAction' ]);

    Route::post("/edit_groups_f", [App\Http\Controllers\filters\GroupController::class,'editFilterAction' ]);
    Route::post("/delete_groups_f", [App\Http\Controllers\filters\GroupController::class,'deleteFilterAction' ]);
    Route::post("/create_groups_f", [App\Http\Controllers\filters\GroupController::class,'addFilterAction' ]);
    Route::post("/edit_field_of_usage", [App\Http\Controllers\filters\FieldOfUsageController::class,'editFilterAction' ]);
    Route::post("/delete_field_of_usage", [App\Http\Controllers\filters\FieldOfUsageController::class,'deleteFilterAction' ]);
    Route::post("/create_field_of_usage", [App\Http\Controllers\filters\FieldOfUsageController::class,'addFilterAction' ]);


    Route::get("/partners", [App\Http\Controllers\admin\PartnerController::class,'getPartnersAdminAction' ]);
    Route::resource('products', "ProductController")->only([
        'create', 'store', 'update','edit', ]);
    Route::resource('products_admin', "ProductController");
    Route::get("/delete/{id}", [\App\Http\Controllers\admin\AdminController::class,'deletePost', ]);
    Route::get("/delete_partner/{id}", [\App\Http\Controllers\admin\PartnerController::class,'deletePartnerAction', ]);
    Route::post("/visible/{id}", [\App\Http\Controllers\admin\AdminController::class,'visiblePost',]);
    Route::post("/save_contact/", [\App\Http\Controllers\admin\ContactController::class,'editContacts',]);

    Route::post("/edit_groups_f", [\App\Http\Controllers\filters\GroupController::class,'editFilterAction' ]);
    Route::post("/delete_groups_f", [\App\Http\Controllers\filters\GroupController::class,'deleteFilterAction' ]);
    Route::post("/create_groups_f", [\App\Http\Controllers\filters\GroupController::class,'addFilterAction' ]);

    Route::post("/edit_field_of_usage", [\App\Http\Controllers\filters\FieldOfUsageController::class,'editFilterAction' ]);
    Route::post("/delete_field_of_usage", [\App\Http\Controllers\filters\FieldOfUsageController::class,'deleteFilterAction' ]);
    Route::post("/create_field_of_usage", [\App\Http\Controllers\filters\FieldOfUsageController::class,'addFilterAction' ]);

    Route::post("/store_partner_img", [\App\Http\Controllers\admin\PartnerController::class,'storePartnerAction' ]);
    Route::post("/swap_partners", [\App\Http\Controllers\admin\PartnerController::class,'swapPartnerAction' ]);
    Route::post("/delete_partner", [\App\Http\Controllers\admin\PartnerController::class,'deletePartnerAction' ]);

    Route::get("/editRu/{id}", [\App\Http\Controllers\admin\AdminController::class,'editRu', ]);
    Route::get("/test", function(){
        return view('test');
    });
    Route::get("/editEn/{id}", [\App\Http\Controllers\admin\AdminController::class,'editEn', ]);
    Route::post("/updatePosts/", [\App\Http\Controllers\admin\AdminController::class,'updatePosts', ]);
});


require __DIR__.'/auth.php';
