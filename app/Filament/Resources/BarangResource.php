<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangResource\Pages;
use App\Filament\Resources\BarangResource\RelationManagers;
use App\Models\Barang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\Textinput::make('nama_barang')
                    ->label('nama_barang')
                    ->required()
                    ->maxLength(20),
                    Forms\Components\Textinput::make('kd_barang')
                    ->label('kd_barang')
                    ->required()
                    ->maxLength(5),
                    Forms\Components\Textinput::make('satuan')
                    ->label('satuan')
                    ->required(),
                    Forms\Components\Textinput::make('hargaBeli')
                    ->label('hargaBeli')
                    ->required()
                    ->maxLength(12),
                    Forms\Components\Textinput::make('stok')
                    ->label('stok')
                    ->required(),
                    Forms\Components\Select::make('status')
                ->options([
                    'Tersedia' => 'Tersedia',
                    'Tidak Tersedia' => 'Tidak Tersedia',
                ])
                ->searchable()
                ->native(false),
                    Forms\Components\Textinput::make('hargaJual')
                    ->label('hargaJual')
                    ->required()
                    ->maxLength(12),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Table\Columns\TextColumn::make('nama_barang')->sortable()->searchable(),
                Table\Columns\TextColumn::make('kd_barang')->sortable()->searchable(),
                Table\Columns\TextColumn::make('satuan')->sortable()->searchable(),
                Table\Columns\TextColumn::make('hargaJual')->sortable()->searchable(),   
                Table\Columns\TextColumn::make('hargaBeli')->sortable()->searchable(),
                Table\Columns\TextColumn::make('stok')->sortable()->searchable(),
                Table\Columns\TextColumn::make('status')->sortable()->searchable(),
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
            'index' => Pages\ListBarangs::route('/'),
            'create' => Pages\CreateBarang::route('/create'),
            'edit' => Pages\EditBarang::route('/{record}/edit'),
        ];
    }
}
