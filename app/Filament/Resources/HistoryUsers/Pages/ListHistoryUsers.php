<?php

namespace App\Filament\Resources\HistoryUsers\Pages;

use App\Filament\Resources\HistoryUsers\HistoryUserResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHistoryUsers extends ListRecords
{
    protected static string $resource = HistoryUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
