<?php

namespace App\Filament\Resources\Store;

use App\Filament\Resources\Store\ProductResource\Pages;
use App\Filament\Resources\Store\ProductResource\RelationManagers;
use App\Filament\Resources\Store\ProductResource\RelationManagers\AttributesRelationManager;
use App\Models\Category;
use App\Models\Store\Product;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Yepsua\Filament\Forms\Components\Rating;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Rating::make('rating')
                    ->required(),
                SpatieMediaLibraryFileUpload::make('avatar')
                    ->multiple()
                    ->responsiveImages()
                    ->enableReordering()
                    ->collection('product.gallery'),
                Forms\Components\TextInput::make('cover')
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required(),
                Forms\Components\TextInput::make('inventory')
                    ->required(),
                Forms\Components\DateTimePicker::make('published_at'),
                Forms\Components\Textarea::make('content')
                    ->maxLength(65535),
                Select::make('category')
                    ->searchable()
                    ->preload()
                    ->relationship('category', 'name')
                    ->multiple()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('desc')
                            ->maxLength(65535),
                        Select::make('type')
                            ->options([
                                'api' => 'api',
                                'web' => 'web',
                                'blog' => 'blog'
                            ]),
                        TextInput::make('level')->default(0),
                        Forms\Components\Select::make('parent_id')
                            ->label('دسته بندی پدر')
                            ->reactive()
                            ->afterStateUpdated(function (Closure $set, $state) {
                                if ($state) {
                                    $level = Category::find($state)->level;
                                    $set('level', $level + 1);
                                } else
                                    $set('level', 0);
                            })
                            ->relationship('parent', 'name', fn (Builder $query, ?Category $record) => $query->whereNot('id', $record ? $record->id : null)),
                        Forms\Components\Toggle::make('is_visible'),
                        // IconPicker::make('icon'),
                        Forms\Components\Textarea::make('shortInfo')
                            ->maxLength(65535),
                        Forms\Components\TextInput::make('cover')
                            ->maxLength(255),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('gallery'),
                Tables\Columns\TextColumn::make('cover'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('inventory'),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            AttributesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
