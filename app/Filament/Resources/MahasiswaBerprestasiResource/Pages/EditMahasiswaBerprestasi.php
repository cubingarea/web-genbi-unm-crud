<?php

namespace App\Filament\Resources\MahasiswaBerprestasiResource\Pages;

use App\Filament\Resources\MahasiswaBerprestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMahasiswaBerprestasi extends EditRecord
{
    protected static string $resource = MahasiswaBerprestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
