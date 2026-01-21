<?php

namespace App\Filament\Resources\JenisTryouts\Pages;

use App\Filament\Resources\JenisTryouts\JenisTryoutResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJenisTryout extends EditRecord
{
    protected static string $resource = JenisTryoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
