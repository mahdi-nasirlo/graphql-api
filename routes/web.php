<?php

use App\Http\Controllers\Store\CategoryListController;
use App\Http\Livewire\BLog\Post;
use App\Http\Livewire\BLog\PostList;
use App\Http\Livewire\Cart\Cart;
use App\Http\Livewire\Cart\Delivery;
use App\Http\Livewire\Cart\Detail;
use App\Http\Livewire\Cart\Review;
use App\Http\Livewire\Cart\Service;
use App\Http\Livewire\Profile\Address;
use App\Http\Livewire\Profile\Dashboard;
use App\Http\Livewire\Profile\Like;
use App\Http\Livewire\Profile\Order;
use App\Http\Livewire\Profile\Ticket;
use App\Http\Livewire\Profile\TicketSingle;
use App\Http\Livewire\Store\ProductList;
use App\Models\Store\Product;
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

    $product = Product::query()->where("category_id", 5)->with(['attributes', 'category'])->whereHas('attributes', function ($query) {
        $query->whereIn('name', ['رنگ'])->whereIn('value', ['مهتابی']);
    })->get();

    return view('index', compact('product'));
})->name('home');

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


Route::name('cart.')->prefix('cart')->group(function () {
    Route::get("/", Cart::class)->name('index');
    Route::get("/detail", Detail::class)->name('detail');
    Route::get("/delivery", Delivery::class)->name("delivery");
    Route::get("/service", Service::class)->name("service");
    Route::get("/review", Review::class)->name("review");
});

Route::name('profile.')->prefix('profile')->group(function () {
    Route::get("/", Dashboard::class)->name('dashboard');
    Route::get("/order", Order::class)->name('order');
    Route::get("/like", Like::class)->name("like");
    Route::get("/ticket", Ticket::class)->name("ticket");
    Route::get("/ticket/single", TicketSingle::class)->name('ticket.single');
    Route::get("/address", Address::class)->name("address");
});

Route::name('blog.')->prefix('blog')->group(function () {
    Route::get("/list", PostList::class)->name('list');
    Route::get("/list/post", Post::class)->name('post');
});

Route::view("/contactUs", 'contact-us')->name('contactUs');
Route::view("/faq", 'support')->name('support');
Route::view("/faq/topic", 'support-single')->name('support.single');
Route::view("/faq/request", 'support-request')->name('support.request');
