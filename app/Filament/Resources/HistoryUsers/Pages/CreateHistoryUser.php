<?php

namespace App\Filament\Resources\HistoryUsers\Pages;

use App\Filament\Resources\HistoryUsers\HistoryUserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHistoryUser extends CreateRecord
{
    protected static string $resource = HistoryUserResource::class;
}
