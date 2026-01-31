<?php

namespace App\Filament\Resources\UserOligarkies\Pages;

use App\Filament\Resources\UserOligarkies\UserOligarkieResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUserOligarkies extends ListRecords
{
    protected static string $resource = UserOligarkieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
