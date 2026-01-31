<?php

namespace App\Filament\Resources\SubjenisTryouts\Pages;

use App\Filament\Resources\SubjenisTryouts\SubjenisTryoutResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSubjenisTryouts extends ListRecords
{
    protected static string $resource = SubjenisTryoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
