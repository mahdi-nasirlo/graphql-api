<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Category extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable =
    [
        "name",
        "shortInfo",
        "cover"
    ];

    public function brands()
    {
        return $this->morphToMany(Brand::class, "brandable");
    }
}
