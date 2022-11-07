<?php

namespace App\Models\Store;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        "content",
        "published_at",
        "inventory",
        "price",
        "cover",
        "gallery",
        "slug",
        "name",
        "rating",
        "category_id"
    ];

    protected $casts = [
        'published_at' => "datetime",
        "gallery" => "array"
    ];

    protected $attribute = [
        'gallery'
    ];

    public function getGalleryAttribute()
    {
        return $this->getMedia("product.gallery");
    }

    public function attributes()
    {
        return $this->belongsToMany(
            Attribute::class,
            'attribute_category_product',
            'product_id',
            'attributes_id'
        )
            ->withPivot(['value', 'category_id']);
    }

    // public function category()
    // {
    //     return $this->morphToMany(
    //         Category::class,
    //         "categoryable",
    //     );
    // }

    //TODO: get category just has web type
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
