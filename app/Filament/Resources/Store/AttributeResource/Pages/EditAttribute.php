<?php

namespace App\Filament\Resources\Store\AttributeResource\Pages;

use App\Filament\Resources\Store\AttributeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAttribute extends EditRecord
{
    protected static string $resource = AttributeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
