<?php

namespace App\Filament\Resources\HistoryUsers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

class HistoryUserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('id_user')
                    ->relationship('idUser', 'nama')
                    ->required(),
                Select::make('nama_paket_tryout')
                    ->relationship('namaPaketTryout', 'nama_paket_tryout')
                    ->required(),
                Select::make('nama_paket_soal')
                    ->relationship('namaPaketSoal', 'nama_paket_soal')
                    ->required(),
                TextInput::make('score'),
                TextInput::make('total_correct'),
                TextInput::make('total_wrong'),
                Select::make('status')
                    ->options([
                        'progress' => 'In Progress',
                        'completed' => 'Completed',
                    ])
                    ->required(),
                DatePicker::make('tanggal_completed')
                    ->label('Tanggal Selesai Pengerjaan')
                    ->native(false) // Menggunakan UI kalender modern, bukan bawaan browser
                    ->displayFormat('d/m/Y'),
            ]);
    }
}
