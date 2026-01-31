<?php

namespace App\Filament\Resources\HistorySoals\Pages;

use App\Filament\Resources\HistorySoals\HistorySoalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHistorySoals extends ListRecords
{
    protected static string $resource = HistorySoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
