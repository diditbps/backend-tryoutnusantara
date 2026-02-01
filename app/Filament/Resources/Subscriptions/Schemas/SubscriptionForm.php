<?php

namespace App\Filament\Resources\Subscriptions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Schema;

class SubscriptionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //

                Select::make("id_user")
                    ->relationship("idUser", "nama")
                    ->required(),
                Select::make("plan_type")
                    ->options([
                        'monthly' => 'Monthly',
                        'yearly' => 'Yearly',
                    ])
                    ->required(),
                Select::make("status")
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        'expired' => 'Expired',
                    ])
                    ->required(),
                DateTimePicker::make("start_date_premium"),
                DateTimePicker::make("end_date_premium"),
            ]);
    }
}
