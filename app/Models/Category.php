<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        "cover",
        'parent_id',
        'icon',
        'level'
    ];

    public function brands()
    {
        return $this->morphToMany(Brand::class, "brandable");
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // public function children(): HasMany
    // {
    //     return $this->hasMany(Category::class, 'parent_id');
    // }

    public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->subcategories()->with('children');
    }

    public function hasChildren()
    {
        if ($this->children->count()) {
            return true;
        }
        return false;
    }
}
