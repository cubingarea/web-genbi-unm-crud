<?php

namespace App\Filament\Resources\KontakPengurusResource\Pages;

use App\Filament\Resources\KontakPengurusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKontakPenguruses extends ListRecords
{
    protected static string $resource = KontakPengurusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
