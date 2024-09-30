<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupplierResource\Pages;
use App\Filament\Resources\SupplierResource\RelationManagers;
use App\Models\Supplier;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SupplierResource extends Resource
{
    protected static ?string $model = Supplier::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textinput::make('kd_supplier')
                    ->label('kd_supplier')
                    ->required()
                    ->maxLength(5),
                    Forms\Components\Textinput::make('nama_supplier')
                    ->label('nama_supplier')
                    ->required()
                    ->maxLength(20),
                    Forms\Components\Textinput::make('alamat')
                    ->label('alamat')
                    ->required()
                    ->maxLength(100),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Table\Columns\TextColumn::make('kd_supplier')->sortable()->searchable(),
                Table\Columns\TextColumn::make('nama_supplier')->sortable()->searchable(),
                Table\Columns\TextColumn::make('alamat')->sortable()->searchable(),
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
            'index' => Pages\ListSuppliers::route('/'),
            'create' => Pages\CreateSupplier::route('/create'),
            'edit' => Pages\EditSupplier::route('/{record}/edit'),
        ];
    }
}