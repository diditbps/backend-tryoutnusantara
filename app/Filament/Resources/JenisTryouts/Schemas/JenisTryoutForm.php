<?php

namespace App\Filament\Resources\JenisTryouts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JenisTryoutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('jenis_tryout')
                    ->required(),
            ]);
    }
}
