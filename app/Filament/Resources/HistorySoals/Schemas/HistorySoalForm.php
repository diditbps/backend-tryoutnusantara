<?php

namespace App\Filament\Resources\HistorySoals\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Radio;

class HistorySoalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('id_history_user')
                    ->relationship('idHistoryuser', 'id')
                    ->required(),
                    Select::make('id_soal')
                    ->relationship('idSoal', 'id')
                    ->required(),
                Radio::make('jawaban_user')
                    ->options([
                        'a' => 'A',
                        'b' => 'B',
                        'c' => 'C',
                        'd' => 'D',
                    ])
                    ->required(),
                Toggle::make('is_correct')
            ]);
    }
}
