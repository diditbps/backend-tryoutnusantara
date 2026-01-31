<?php

namespace App\Filament\Resources\UserOligarkies\Pages;

use App\Filament\Resources\UserOligarkies\UserOligarkieResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUserOligarkie extends EditRecord
{
    protected static string $resource = UserOligarkieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
