<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "content",
        "published_at",
        "inventory",
        "price",
        "cover",
        "gallery",
        "slug",
        "name"
    ];

    protected $casts = [
        'published_at' => "datetime",
        "gallery" => "array"
    ];
}
