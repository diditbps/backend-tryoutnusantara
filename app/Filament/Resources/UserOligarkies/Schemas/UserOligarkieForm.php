<?php

namespace App\Filament\Resources\UserOligarkies\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Datepicker;

class UserOligarkieForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('nama'),
                TextInput::make('email'),
                TextInput::make('no_hp'),
                TextInput::make('password'),
                Select::make("role")
                    ->options([
                        'siswa' => 'Siswa/Peserta',
                        'qc' => 'Quality Control',
                        'entri' => 'Petugas Entri',
                    ])
                    ->required(),
                Toggle::make('is_premium'),
                TextInput::make('poin'),
                Datepicker::make('last_login'),
            ]);
    }
}
