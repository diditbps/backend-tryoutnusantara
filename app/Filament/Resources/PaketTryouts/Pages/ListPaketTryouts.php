<?php

namespace App\Filament\Resources\PaketTryouts\Pages;

use App\Filament\Resources\PaketTryouts\PaketTryoutResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPaketTryouts extends ListRecords
{
    protected static string $resource = PaketTryoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
