<?php

namespace App\Filament\Resources\KontakPengurusResource\Pages;

use App\Filament\Resources\KontakPengurusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKontakPengurus extends EditRecord
{
    protected static string $resource = KontakPengurusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
