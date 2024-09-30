<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MasukResource\Pages;
use App\Filament\Resources\MasukResource\RelationManagers;
use App\Models\Masuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MasukResource extends Resource
{
    protected static ?string $model = Masuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textinput::make('kd_masuk')
                    ->label('kd_masuk')
                    ->required()
                    ->maxLength(5),
                    Forms\Components\Textinput::make('tgl_masuk')
                    ->label('tgl_masuk')
                    ->required(),
                    Forms\Components\Textinput::make('kd_admin')
                    ->label('kd_admin')
                    ->required()
                    ->maxLength(5),
                    Forms\Components\Textinput::make('kd_supplier')
                    ->label('kd_supplier')
                    ->required()
                    ->maxLength(5),
                    Forms\Components\Textinput::make('total_masuk')
                    ->label('total_masuk')
                    ->required(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Table\Columns\TextColumn::make('kd_masuk')->sortable()->searchable(),
                Table\Columns\TextColumn::make('tgl_masuk')->sortable()->searchable(),
                Table\Columns\TextColumn::make('kd_admin')->sortable()->searchable(),
                Table\Columns\TextColumn::make('kd_supplier')->sortable()->searchable(),   
                Table\Columns\TextColumn::make('total_masuk')->sortable()->searchable(),
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
            'index' => Pages\ListMasuks::route('/'),
            'create' => Pages\CreateMasuk::route('/create'),
            'edit' => Pages\EditMasuk::route('/{record}/edit'),
        ];
    }
}