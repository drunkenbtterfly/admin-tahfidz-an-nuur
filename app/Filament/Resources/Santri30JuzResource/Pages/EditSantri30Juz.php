<?php

namespace App\Filament\Resources\Santri30JuzResource\Pages;

use App\Filament\Resources\Santri30JuzResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSantri30Juz extends EditRecord
{
    protected static string $resource = Santri30JuzResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
