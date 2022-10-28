<?php

namespace App\Filament\Resources\Store\ProductResource\Pages;

use App\Filament\Resources\Store\ProductResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;
}
