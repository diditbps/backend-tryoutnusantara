<?php

namespace App\Filament\Resources\HistorySoals;

use App\Filament\Resources\HistorySoals\Pages\CreateHistorySoal;
use App\Filament\Resources\HistorySoals\Pages\EditHistorySoal;
use App\Filament\Resources\HistorySoals\Pages\ListHistorySoals;
use App\Filament\Resources\HistorySoals\Schemas\HistorySoalForm;
use App\Filament\Resources\HistorySoals\Tables\HistorySoalsTable;
use App\Models\HistorySoal;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HistorySoalResource extends Resource
{
    protected static ?string $model = HistorySoal::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return HistorySoalForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HistorySoalsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHistorySoals::route('/'),
            'create' => CreateHistorySoal::route('/create'),
            'edit' => EditHistorySoal::route('/{record}/edit'),
        ];
    }
}
