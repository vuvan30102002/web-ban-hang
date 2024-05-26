<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/login', [App\Http\Controllers\FrontendController::class, 'show_login'])->name('login');
Route::post('/checklogin',[App\Http\Controllers\FrontendController::class,'check_login']);


Route::middleware('auth')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/', function(){
            return view('admin.home');
        });
        Route::get('/product/list',[App\Http\Controllers\Admin\productController::class,'list_product']);
        Route::get('/order/list', [App\Http\Controllers\Admin\orderController::class,'list_order']);
    });

});

Route::post('/admin/product/add',[App\Http\Controllers\Admin\productController::class,'insert_product']);
Route::get('/admin/product/add', [App\Http\Controllers\Admin\productController::class,'add_product']);
Route::get('/admin/product/delete',[App\Http\Controllers\Admin\productController::class,'delete_product']);
Route::get('/admin/product/edit/{id}',[App\Http\Controllers\Admin\productController::class,'edit_product']);
Route::post('/admin/product/edit/{id}',[App\Http\Controllers\Admin\productController::class,'update_product']);




// Route::get('/admin/order/list', [App\Http\Controllers\Admin\orderController::class,'list_order']);
Route::get('/admin/order/detail/{order_detail}', [App\Http\Controllers\Admin\orderController::class,'detail_order']);

Route::post('/upload',[App\Http\Controllers\Admin\uploadController::class,'uploadImage']);
Route::post('/uploads',[App\Http\Controllers\Admin\uploadController::class,'uploadImages']);

//product.//////////
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[\App\Http\Controllers\FrontendController::class,'index']);
Route::get('/product/{id}', [App\Http\Controllers\FrontendController::class, 'show_product']);
Route::post('/cart/add', [App\Http\Controllers\FrontendController::class, 'add_cart']);
Route::get('/cart', [App\Http\Controllers\FrontendController::class, 'show_cart']);
Route::get('/cart/delete/{id}', [App\Http\Controllers\FrontendController::class, 'delete_cart']);
Route::post('/cart/update', [App\Http\Controllers\FrontendController::class, 'update_cart']);
Route::post('/cart/send', [App\Http\Controllers\FrontendController::class, 'send_cart']);

Route::get('/order/confirm', function () {
    return view('order.confirm');
});
Route::get('/order/success', function () {
    return view('order.success');
});

