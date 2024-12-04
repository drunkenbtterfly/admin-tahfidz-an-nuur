<?php

namespace App\Filament\Widgets;

use App\Models\Fasilitas;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;

class LatestFasilitas extends BaseWidget
{
    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        // Ambil data dari model Galeri
        return Fasilitas::query()->latest(); // Mengambil data terbaru
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('fasilitas')->label('Fasilitas'),
            Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi'),
        ];
    }
}
