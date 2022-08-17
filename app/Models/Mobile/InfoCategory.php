<?php

namespace App\Models\Mobile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoCategory extends Model
{
    use HasFactory;

    protected $fillable =
    [
        "name",
        "shortInfo",
        "cover"
    ];
}
