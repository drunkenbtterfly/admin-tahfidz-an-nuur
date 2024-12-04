<?php

namespace App\Filament\Widgets;

use App\Models\Pengurus;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;

class LatestPengurus extends BaseWidget
{
    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        // Ambil data dari model Galeri
        return Pengurus::query()->latest(); // Mengambil data terbaru
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama')->label('Nama'),
            Tables\Columns\ImageColumn::make('foto')->label('Gambar'),
            Tables\Columns\TextColumn::make('jabatan')->label('Jabatan'),
        ];
    }
}
