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

Route::get('/', [\App\Http\Controllers\HomeController::class,"home"]);

Route::get("about-us",[\App\Http\Controllers\HomeController::class,"aboutUs"]);

Route::get("user/login/abc", function (){
    return "Hello Login";
});
Route::get("/category/{category:slug}",[\App\Http\Controllers\HomeController::class,"category"]);
Route::get("/category",[\App\Http\Controllers\HomeController::class,"category"]);
Route::get('/detail/{product:slug}', [\App\Http\Controllers\HomeController::class,"product"]);
Route::get('/add-to-cart/{product}', [\App\Http\Controllers\HomeController::class,"addToCart"]);
Route::get('/delete-from-cart/{product}', [\App\Http\Controllers\HomeController::class, "deleteFromCart"]);
Route::get('/clear-cart', [\App\Http\Controllers\HomeController::class, "clearCart"]);
Route::get('/shopping_cart',[\App\Http\Controllers\HomeController::class,"cart"])->name("cart");
Route::get("/check_out",[\App\Http\Controllers\HomeController::class,"checkout"]);
Route::post("/check_out",[\App\Http\Controllers\HomeController::class,"placeOrder"]);
Route::get('/thank_you/{order}', [\App\Http\Controllers\HomeController::class,"thankYou"]);

//Admin
Route::get('/admin-dashboard', [\App\Http\Controllers\AdminController::class, "dashboard"]);
Route::get('/admin-table1', [\App\Http\Controllers\AdminController::class, "table1"]);
Route::get('/admin-table2', [\App\Http\Controllers\AdminController::class, "table2"]);
Route::get('/admin-table3', [\App\Http\Controllers\AdminController::class, "table3"]);

