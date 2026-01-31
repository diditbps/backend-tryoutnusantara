<?php

namespace App\Filament\Resources\SubjenisTryouts\Pages;

use App\Filament\Resources\SubjenisTryouts\SubjenisTryoutResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSubjenisTryout extends EditRecord
{
    protected static string $resource = SubjenisTryoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
