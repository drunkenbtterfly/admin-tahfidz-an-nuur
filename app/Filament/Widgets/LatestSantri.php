<?php

namespace App\Filament\Widgets;

use App\Models\Santri30Juz;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;

class LatestSantri extends BaseWidget
{
    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        // Ambil data dari model Galeri
        return Santri30Juz::query()->latest(); // Mengambil data terbaru
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama')->label('Nama'),
            Tables\Columns\TextColumn::make('asal')->label('Asa;'),
        ];
    }
}
