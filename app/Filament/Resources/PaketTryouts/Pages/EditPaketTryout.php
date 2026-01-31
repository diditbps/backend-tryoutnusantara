<?php

namespace App\Filament\Resources\PaketTryouts\Pages;

use App\Filament\Resources\PaketTryouts\PaketTryoutResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPaketTryout extends EditRecord
{
    protected static string $resource = PaketTryoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
