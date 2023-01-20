<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard',[Dashboard::class,'dashboard'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// display category
Route::get('/category',[CategoryController::class,'allcategory'])->name('category');
// add category
Route::get('/addcategory',[CategoryController::class,'addcategory'])->name('addcategory');
Route::post('/addcategory',[CategoryController::class,'storecategory'])->name('storecategory');
// edit category
Route::get('/editcategory/{id}',[CategoryController::class,'editcategory'])->name('editcategory');
Route::post('/editcategory/{id}',[CategoryController::class,'updatecategory'])->name('updatecategory');
Route::get('/deletecat/{id}',[CategoryController::class,'destroycat'])->name('delcat');

// display product
Route::get('/product',[ProductController::class,'allproduct'])->name('product');
// add category
Route::get('/addproduct',[ProductController::class,'addproduct'])->name('addproduct');
Route::post('/addproduct',[ProductController::class,'storeproduct'])->name('storeproduct');
// edit category
Route::get('/editproduct/{id}',[ProductController::class,'editproduct'])->name('editproduct');
Route::post('/editproduct/{id}',[ProductController::class,'updateproduct'])->name('updateproduct');
Route::get('/deletepro/{id}',[ProductController::class,'destroypro'])->name('delpro');

// display cliet
Route::get('/client',[ClientController::class,'allclient'])->name('client');
// add category
Route::get('/addclient',[ClientController::class,'addclient'])->name('addclient');
Route::post('/addclient',[ClientController::class,'storeclient'])->name('storeclient');
// edit category
Route::get('/editclient/{id}',[ClientController::class,'editclient'])->name('editclient');
Route::post('/editclient/{id}',[ClientController::class,'updateclient'])->name('updateclient');
Route::get('/deleteclient/{id}',[ClientController::class,'destroycli'])->name('delcli');



require __DIR__.'/auth.php';
