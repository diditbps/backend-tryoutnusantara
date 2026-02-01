<?php

namespace App\Filament\Resources\PaketTryouts\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Slider;
use Filament\Schemas\Schema;

class PaketTryoutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('jenis_tryout')
                    ->relationship('jenisTryout', 'jenis_tryout')
                    ->required(),
                TextInput::make('nama_paket_tryout'),
                Toggle::make('is_premium'),
                Toggle::make('is_event'),
                TextInput::make('harga'),
                DatePicker::make('tanggal_rilis'),
                DatePicker::make('tanggal_expired'),
                TextInput::make('tahun'),
                Slider::make('rate')
                    ->range(minValue: 0, maxValue: 5)
                    ->step(0.1)
                    ->tooltips()
                    ->required(),
            ]);
    }
}
