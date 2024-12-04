<?php

namespace App\Filament\Widgets;

use App\Models\KegiatanTambahan;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;

class LatestKegiatanTambahan extends BaseWidget
{
    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        // Ambil data dari model Galeri
        return KegiatanTambahan::query()->latest(); // Mengambil data terbaru
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi'),
        ];
    }
}
