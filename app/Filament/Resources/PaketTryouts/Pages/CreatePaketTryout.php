<?php

namespace App\Filament\Resources\PaketTryouts\Pages;

use App\Filament\Resources\PaketTryouts\PaketTryoutResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePaketTryout extends CreateRecord
{
    protected static string $resource = PaketTryoutResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
