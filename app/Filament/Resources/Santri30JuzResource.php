<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Santri30JuzResource\Pages;
use App\Filament\Resources\Santri30JuzResource\RelationManagers;
use App\Models\Santri30Juz;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Santri30JuzResource extends Resource
{
    protected static ?string $model = Santri30Juz::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama'),
                TextInput::make('asal'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama'),
                TextColumn::make('asal'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSantri30Juzs::route('/'),
            'create' => Pages\CreateSantri30Juz::route('/create'),
            'edit' => Pages\EditSantri30Juz::route('/{record}/edit'),
        ];
    }    
}
