<?php

namespace App\Http\Livewire\Store;

use App\Http\Filters\AttributesFilter;
use App\Http\Filters\PriceFilter;
use App\Models\Category;
use App\Models\Store\Product;
use Illuminate\Pipeline\Pipeline;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public Category $category;

    public $attributes = [];

    public $modalProduct;

    public $maxPrice;

    public $minPrice;

    public $queryString = [
        'maxPrice',
        "minPrice",
        'attributes'
    ];

    public function paginationView()
    {
        return 'components.pagination';
    }

    public function mount()
    {
        $products =
            app(Pipeline::class)
            ->send(Product::query()
                ->where('category_id', $this->category->id)
                ->with(['attributes']))
            ->through([
                new AttributesFilter($this->attributes),
            ])
            ->thenReturn()
            ->get();

        $this->maxPrice = $products->max('price') / 1000;

        $this->minPrice = $products->min('price') / 1000;

        if (!$this->category->products()->count()) {
            return redirect(route('home'));
        }
        $this->category->load('products');
    }

    public function updateWithFilter(Product $product)
    {
        $posts =
            app(Pipeline::class)
            ->send(Product::query()
                ->where('category_id', $this->category->id)
                ->with(['attributes']))
            ->through([
                new AttributesFilter($this->attributes)
            ])
            ->thenReturn()
            ->get();

        dd($posts);
    }

    public function render()
    {
        $products =
            app(Pipeline::class)
            ->send(Product::query()
                ->where('category_id', $this->category->id)
                ->with(['attributes']))
            ->through([
                new AttributesFilter($this->attributes),
                new PriceFilter($this->minPrice, $this->maxPrice)
            ])
            ->thenReturn()
            ->get();

        return view('livewire.store.product-list', compact('products'))
            ->layout('layout.master');
    }
}
