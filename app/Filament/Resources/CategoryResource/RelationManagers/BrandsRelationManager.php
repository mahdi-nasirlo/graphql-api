<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use App\Models\Brand;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\AttachAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BrandsRelationManager extends RelationManager
{
    protected static string $relationship = 'brands';

    protected bool $allowsDuplicates = false;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                Tables\Actions\AttachAction::make()->form(fn (AttachAction $action): array => [
                    $select = Select::make('recordId')
                        ->label(__('filament-support::actions/attach.single.modal.fields.record_id.label'))
                        ->required()
                        ->searchable()
                        // ->getSearchResultsUsing(static fn (Select $component, string $search): array => $getOptions(search: $search, searchColumns: $component->getSearchColumns()))
                        // ->getOptionLabelUsing(fn ($value): string => $this->getRecordTitle($this->getRelationship()->getRelated()->query()->find($value)))
                        ->options(fn (Brand $record) => Brand::all()->pluck("name", "id")->toArray())

                        ->disableLabel()
                    // Select::make('brand_id')
                    //     ->label('Author')
                    //     ->options(Brand::all()->pluck("name", "id"))
                    //     ->searchable()
                    // $action->getRecordSelect(),
                    // Forms\Components\TextInput::make('role')->required(),
                ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DetachBulkAction::make(),
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
