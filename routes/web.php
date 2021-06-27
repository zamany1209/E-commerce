<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentsController;
use App\Models\Product;

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

Route::get('/', function() {
    return view('index');
});
Route::get('/index', function() {
    return view('index');
});
Route::get('login', function() {

    return view('login');
});
Route::get('register', function() {
    return view('register');
});
// Route::get('/product/{url}', function($url) {
//     return view('product' ,['url' => $url]);
// });
Route::get('cart', function() {
    return view('cart');
});
Route::get('like', function() {
    return view('like');
});
Route::get('profile', function() {
    return view('profile_user');
});
Route::get('/product/{url}',[ProductController::class, 'index'])->name('auth.product_list');
Route::get('product-list/{category}',[ProductController::class, 'product_list_category'])->name('auth.product_list_category');
Route::get('product-list/',[ProductController::class, 'product_list'])->name('auth.product_list');
Route::get('resete_password_user',[UserController::class, 'resete_password_user'])->name('auth.resete_password_user');
Route::post('check_resete_password_user',[UserController::class, 'check_resete_password_user'])->name('auth.check_resete_password_user');
Route::get('edite_data_user',[UserController::class, 'edite_data_user'])->name('auth.edite_data_user');
Route::post('check_edite_data_user',[UserController::class, 'check_edite_data_user'])->name('auth.check_edite_data_user');
Route::post('comment',[CommentsController::class, 'create'])->name('auth.comment');
Route::post('create',[UserController::class, 'create'])->name('auth.create');
Route::post('check',[UserController::class, 'check'])->name('auth.check');
Route::get('logaut',[UserController::class, 'logaut'])->name('auth.logaut');

/*    admin    */
Route::get('admin', function() {
    return view('admin.home');
});
Route::get('admin/create-product', function() {
    return view('admin.create-product');
});
Route::get('admin/product-list', function() {
    return view('admin/product-list');
});
Route::get('admin/list-image/{url}', function($url) {
    return view('admin/list-image',["id_product" => $url]);
});
Route::get('admin/edite-product/{url}', function($url) {
    return view('admin/edite-product',["id_product" => $url]);
});
Route::get('admin/delete-product/{url}', function($url) {
    return view('admin/delete-product',["id_product" => $url]);
});
Route::post('create_product',[AdminController::class, 'Create_Product'])->name('admin.Create_Product');
Route::post('create_image_product',[AdminController::class, 'Create_Image_Product'])->name('admin.Create_Image_Product');
Route::post('edite_product',[AdminController::class, 'Edite_Product'])->name('admin.Edite_Product');

