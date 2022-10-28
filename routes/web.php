<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
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


Route::view('index')->name('index');

Route::get("link", function () {
    Artisan::call("migrate");
    return "success";
});

Route::name('store.')->prefix("store")->group(function () {
    Route::get('/product/{product:slug}', function () {
        return "success";
    })->name('product');
});
