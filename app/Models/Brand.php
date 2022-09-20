<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Brand extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ["name", "cover", "info", "logo", "catalog", "priceList", "installationGuide"];

    protected $append = [
        'catalog',
        'price_list',
        'install_guide'
    ];

    public function getCatalogAttribute()
    {
        return $this->getMedia('catalog');
    }

    public function getPriceListAttribute()
    {
        return $this->getMedia('price_list');
    }

    public function getInstallGuideAttribute()
    {
        return $this->getMedia('install_guide');
    }

    public function categories()
    {
        return $this->morphedByMany(Category::class, "brandable");
    }
}
