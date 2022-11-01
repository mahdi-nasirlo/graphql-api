<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryListController extends Controller
{
    public function index(Category $category)
    {
        if (!$category->hasChildren()) {
            return redirect(route('store.product.list', $category));
        }

        return view("page.store.category-list.index", compact('category'));
    }
}
