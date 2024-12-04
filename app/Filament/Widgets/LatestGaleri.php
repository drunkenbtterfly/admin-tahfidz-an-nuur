<?php

namespace App\Filament\Widgets;

use App\Models\Galeri;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;

class LatestGaleri extends BaseWidget
{
    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        // Ambil data dari model Galeri
        return Galeri::query()->latest(); // Mengambil data terbaru
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama_gambar')->label('Judul'),
            Tables\Columns\ImageColumn::make('url')->label('Gambar'),
            Tables\Columns\TextColumn::make('kategori')->label('Kategori'),
        ];
    }
}
