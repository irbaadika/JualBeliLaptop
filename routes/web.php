<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardMerkController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DahsboardBuyerController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/seller', function () {
    return view('registerSeller');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('checkRole:admin');

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/verify', [LoginController::class, 'verify']);

Route::get('/block', [LoginController::class, 'block']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/admin/category', DashboardCategoryController::class);

Route::resource('/admin/merk', DashboardMerkController::class);

Route::resource('/admin/product', DashboardProductController::class);

Route::resource('/admin/user', DashboardAdminController::class);

Route::resource('/admin/buyer', DahsboardBuyerController::class);


