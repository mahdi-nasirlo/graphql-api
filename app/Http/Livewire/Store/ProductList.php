<?php

namespace App\Http\Livewire\Store;

use App\Http\Filters\AttributesFilter;
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

    public $queryString = [
        'attributes'
    ];

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

    public function updateWithFilter(Product $product)
    {
        $posts = app(Pipeline::class)
            ->send(Product::query()
                ->where('category_id', $this->category->id)
                ->with(['attributes']))
            ->through([
                new AttributesFilter($this->attributes)
            ])
            ->thenReturn()
            ->get();
    }

    public function render()
    {
        $products =
            app(Pipeline::class)
            ->send(Product::query()
                ->where('category_id', $this->category->id)
                ->with(['attributes']))
            ->through([
                new AttributesFilter($this->attributes)
            ])
            ->thenReturn()
            ->get();

        // ->with(['category', 'attributes'])
        // ->where('category_id', $this->category->id)
        // ->whereHas('attributes', function ($query) {
        //     $query->whereIn('name', $this->attributes);
        // })
        // ->paginate(10);

        return view('livewire.store.product-list', compact('products'))
            ->layout('layout.master');
    }
}
