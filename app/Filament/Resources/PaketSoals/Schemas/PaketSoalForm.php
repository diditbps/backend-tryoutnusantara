<?php

namespace App\Filament\Resources\PaketSoals\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

class PaketSoalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('nama_paket_tryout')
                    ->relationship('namaPaketTryout', 'nama_paket_tryout')
                    ->required(),
                TextInput::make('nama_paket_soal'),
                Textarea::make('deskripsi'),
                TextInput::make('durasi')
                ->label("Durasi (dalam menit)")
                ->required(),
            ]);
    }
}
