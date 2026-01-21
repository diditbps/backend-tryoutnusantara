<?php

namespace App\Filament\Resources\JenisTryouts\Pages;

use App\Filament\Resources\JenisTryouts\JenisTryoutResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJenisTryouts extends ListRecords
{
    protected static string $resource = JenisTryoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
