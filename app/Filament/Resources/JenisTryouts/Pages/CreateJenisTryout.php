<?php

namespace App\Filament\Resources\JenisTryouts\Pages;

use App\Filament\Resources\JenisTryouts\JenisTryoutResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJenisTryout extends CreateRecord
{
    protected static string $resource = JenisTryoutResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
