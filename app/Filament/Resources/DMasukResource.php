<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DMasukResource\Pages;
use App\Filament\Resources\DMasukResource\RelationManagers;
use App\Models\DMasuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DMasukResource extends Resource
{
    protected static ?string $model = DMasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textinput::make('id_masuk')
                    ->label('id_masuk')
                    ->required()
                    ->maxLength(8),
                    Forms\Components\Textinput::make('kd_masuk')
                    ->label('kd_masuk')
                    ->required()
                    ->maxLength(5),
                    Forms\Components\Textinput::make('kd_barang_beli')
                    ->label('kd_barang_beli')
                    ->required()
                    ->maxLength(5),
                    Forms\Components\Textinput::make('jumlah')
                    ->label('jumlah')
                    ->required(),
                    Forms\Components\Textinput::make('subtotal')
                    ->label('subtotal')
                    ->required(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Table\Columns\TextColumn::make('id_masuk')->sortable()->searchable(),
                Table\Columns\TextColumn::make('kd_masuk')->sortable()->searchable(),
                Table\Columns\TextColumn::make('kd_barang_beli')->sortable()->searchable(),
                Table\Columns\TextColumn::make('jumlah')->sortable()->searchable(),   
                Table\Columns\TextColumn::make('subtotal')->sortable()->searchable(),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListDMasuks::route('/'),
            'create' => Pages\CreateDMasuk::route('/create'),
            'edit' => Pages\EditDMasuk::route('/{record}/edit'),
        ];
    }
}
