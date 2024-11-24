<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriResource\Pages;
use App\Filament\Resources\GaleriResource\RelationManagers;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Tables\Filters\SelectFilter;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_gambar'),
                FileUpload::make('url')
                    ->image()
                    ->label('Upload Foto')
                    ->directory('galeri')
                    ->preserveFilenames(),
                TextInput::make('speed'),
                TextInput::make('rotate'),
                Select::make('kategori')
                    ->label('Kategori')
                    ->options([
                        'Fasilitas' => 'Fasilitas',
                        'Kegiatan' => 'Kegiatan',
                        'Prestasi' => 'Prestasi',
                        'Santri' => 'Santri',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_gambar')
                    ->sortable()
                    ->searchable()
                    ->label('Nama'),

                ImageColumn::make('url')
                    ->label('Foto')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('speed')
                    ->sortable()
                    ->searchable(),
                
                TextColumn::make('rotate')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }    
}
