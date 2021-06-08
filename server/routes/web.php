<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;


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

Route::get('/',[HomeController::class, 'index']);
Route::get('/product/{url}',[ProductController::class, 'index']);
Route::get('login',[UserController::class, 'login']);
Route::get('register',[UserController::class, 'register']);
Route::post('create',[UserController::class, 'create'])->name('auth.create');
Route::post('check',[UserController::class, 'check'])->name('auth.check');
Route::get('profile',[UserController::class, 'profile']);
Route::get('logaut',[UserController::class, 'logaut']);

/*    admin    */

Route::get('/live', function() {
    return view('live');
});

Route::get('/admin',[AdminController::class, 'index']);
Route::post('/create_product',[AdminController::class, 'Create_Product'])->name('create_product');
