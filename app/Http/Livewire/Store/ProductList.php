<?php

namespace App\Http\Livewire\Store;

use App\Models\Category;
use App\Models\Store\Product;
use Livewire\Component;

class ProductList extends Component
{
    public Category $category;
    public $modalProduct;

    public function mount()
    {
        $this->category->load('products');
    }

    public function test()
    {
        dd("ljk");
    }

    public function changeModalData(Product $product)
    {
        $this->modalProduct = $product;
    }

    public function render()
    {
        return view('livewire.store.product-list')
            ->layout('layouts.base');
    }
}
