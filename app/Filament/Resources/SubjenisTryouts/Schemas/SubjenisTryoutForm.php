<?php

namespace App\Filament\Resources\SubjenisTryouts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class SubjenisTryoutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('jenis_tryout'),
                TextInput::make('sub_jenis_tryout'),
                TextInput::make('tahun')
            ]);
    }
}
