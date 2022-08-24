<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ["name", "cover", "info", "logo", "catalog", "priceList", "installationGuide"];

    public function categories()
    {
        return $this->morphedByMany(Category::class, "brandable");
    }
}
