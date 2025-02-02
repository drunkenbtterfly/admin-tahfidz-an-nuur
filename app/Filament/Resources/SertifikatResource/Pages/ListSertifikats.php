<?php

namespace App\Filament\Resources\SertifikatResource\Pages;

use App\Filament\Resources\SertifikatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSertifikats extends ListRecords
{
    protected static string $resource = SertifikatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
