<?php

namespace App\Filament\Resources\KegiatanTambahanResource\Pages;

use App\Filament\Resources\KegiatanTambahanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKegiatanTambahan extends EditRecord
{
    protected static string $resource = KegiatanTambahanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
