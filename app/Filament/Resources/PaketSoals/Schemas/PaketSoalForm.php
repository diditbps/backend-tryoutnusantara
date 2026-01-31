<?php

namespace App\Filament\Resources\PaketSoals\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class PaketSoalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('nama_paket'),
                TextInput::make('sub_jenis_tryout'),
                TextInput::make('durasi'),
                TextInput::make('ket_member'),
                TextInput::make('harga'),
                TextInput::make('event'),
                TextInput::make('tanggal_rilis'),
                TextInput::make('tanggal_expired'),
                TextInput::make('tahun')
            ]);
    }
}
