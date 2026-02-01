<?php

namespace App\Filament\Resources\Payments\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('id_user')
                    ->relationship('idUser', 'nama')
                    ->required(),
                TextInput::make('transaction_name'),
                Select::make('transaction_status')
                    ->options([
                        'pending' => 'Pending',
                        'sukses' => 'Sukses',
                        'gagal' => 'Gagal',
                    ])
                    ->required(),
                DateTimePicker::make('transaction_time_completed'),
                TextInput::make('transaction_amount'),
                Textarea::make('transaction_description'),
                DatePicker::make('transaction_date_completed'),
                TextInput::make('transaction_receipt'),
                TextInput::make('transaction_method')
            ]);
    }
}
