<?php

namespace App\Filament\Resources\Store;

use App\Filament\Resources\Store\AttributeResource\Pages;
use App\Filament\Resources\Store\AttributeResource\RelationManagers;
use App\Models\Store\Attribute;
use App\Models\Store\AttributeGroup;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttributeResource extends Resource
{
    protected static ?string $model = Attribute::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('نام شاخص')
                            ->required()
                            ->unique(),
                        Select::make('attribute_group_id')
                            ->nullable()
                            ->label('گروه بندی')
                            ->relationship('AttributeGroup', 'name')
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->unique(column: 'name')
                                    ->label('گروه بندی')
                                    ->required(),
                            ]),
                        Select::make('type')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function (Closure $set, $state) {
                                if ($state == 'boolean')
                                    $set('values', ["ندارد", "دارد"]);
                                else
                                    $set('values', []);
                            })
                            ->label('نوع داده')
                            ->default('string')
                            ->options([
                                'string' => "متن",
                                'boolean' => 'دارد یا ندارد'
                            ]),
                        TagsInput::make('values')
                            ->label('مقادیر')
                            // ->disabled(fn (Closure $get) => $get('type') !== 'string')
                            ->required()
                            // ->required(fn (Closure $get) => $get('type') !== 'string')
                            ->hidden(fn (Closure $get) => $get('type') !== 'string')
                    ])
                    ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                BooleanColumn::make('is_searchable'),
                TagsColumn::make('values')
                    ->default(['دارد', 'ندارد'])
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAttributes::route('/'),
            'create' => Pages\CreateAttribute::route('/create'),
            'edit' => Pages\EditAttribute::route('/{record}/edit'),
        ];
    }
}
