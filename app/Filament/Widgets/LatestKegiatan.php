<?php

namespace App\Filament\Widgets;

use App\Models\Kegiatan;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;

class LatestKegiatan extends BaseWidget
{
    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        // Ambil data dari model Galeri
        return Kegiatan::query()->latest(); // Mengambil data terbaru
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('waktu')->label('Waktu'),
            Tables\Columns\TextColumn::make('tempat')->label('Tempat'),
            Tables\Columns\TextColumn::make('judul')->label('Judul'),
            Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi'),
        ];
    }
}
