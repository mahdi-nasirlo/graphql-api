<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_searchable',
        'values',
        'type',
        'attribute_group_id'
    ];

    protected $casts = [
        'values' => 'array'
    ];

    public function AttributeGroup()
    {
        return $this->belongsTo(AttributeGroup::class);
    }

    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'attribute_category_product',
            'attributes_id',
            'product_id',
        )
            ->withPivot(['value', 'category_id']);
    }

    public function category()
    {
        return $this->belongsToMany(
            Product::class,
            'attribute_category_product',
            'attributes_id',
            'category_id',
        )
            ->withPivot(['value', 'category_id']);
    }
}
