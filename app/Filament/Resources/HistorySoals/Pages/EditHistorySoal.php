<?php

namespace App\Filament\Resources\HistorySoals\Pages;

use App\Filament\Resources\HistorySoals\HistorySoalResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHistorySoal extends EditRecord
{
    protected static string $resource = HistorySoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
