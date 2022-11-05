<?php

use App\Http\Controllers\Store\CategoryListController;
use App\Http\Livewire\Store\ProductList;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Store\Product;
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

Route::get("/", function () {
    // dd(Category::with(['children'])->get());
    // dd(Product::find(1)->category);

    // $product = Product::find(1);

    // if ($product) {
    //     dd($product->category);
    // }

    return view('index');
});

// Route::view("/", "index")->name('index');

Route::get("link", function () {
    Artisan::call("migrate");
    return "success";
});

Route::name('store.')->prefix("store")->group(function () {
    Route::get('/product/{product:slug}', function (Product $product) {
        return view('page.store.single-product.index', compact('product'));
    })->name('product');

    Route::get("/categories/{category}", [CategoryListController::class, 'index'])->name('category.list');
    Route::get("/products/{category}", ProductList::class)->name('product.list');
});
