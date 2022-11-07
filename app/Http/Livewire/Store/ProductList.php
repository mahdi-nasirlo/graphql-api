<?php

namespace App\Http\Livewire\Store;

use App\Models\Category;
use App\Models\Store\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public Category $category;

    public $modalProduct;

    // protected $paginationTheme = 'bootstrap';

    public function paginationView()
    {
        return 'components.pagination';
    }

    public function mount()
    {
        if (!$this->category->products()->count()) {
            return redirect(route('home'));
        }

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
        $products = $this->category->products()->paginate(1);

        return view('livewire.store.product-list', compact('products'))
            ->layout('layout.master');
    }
}
