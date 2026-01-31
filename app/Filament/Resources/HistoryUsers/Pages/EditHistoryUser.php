<?php

namespace App\Filament\Resources\HistoryUsers\Pages;

use App\Filament\Resources\HistoryUsers\HistoryUserResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHistoryUser extends EditRecord
{
    protected static string $resource = HistoryUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
