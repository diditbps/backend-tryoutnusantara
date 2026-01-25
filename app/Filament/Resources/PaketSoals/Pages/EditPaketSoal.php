<?php

namespace App\Filament\Resources\PaketSoals\Pages;

use App\Filament\Resources\PaketSoals\PaketSoalResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPaketSoal extends EditRecord
{
    protected static string $resource = PaketSoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
