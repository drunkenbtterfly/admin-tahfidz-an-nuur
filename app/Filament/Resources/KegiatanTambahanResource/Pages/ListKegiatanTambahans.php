<?php

namespace App\Filament\Resources\KegiatanTambahanResource\Pages;

use App\Filament\Resources\KegiatanTambahanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKegiatanTambahans extends ListRecords
{
    protected static string $resource = KegiatanTambahanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
