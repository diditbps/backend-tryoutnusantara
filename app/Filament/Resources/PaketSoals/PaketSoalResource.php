<?php

namespace App\Filament\Resources\PaketSoals;

use App\Filament\Resources\PaketSoals\Pages\CreatePaketSoal;
use App\Filament\Resources\PaketSoals\Pages\EditPaketSoal;
use App\Filament\Resources\PaketSoals\Pages\ListPaketSoals;
use App\Filament\Resources\PaketSoals\Schemas\PaketSoalForm;
use App\Filament\Resources\PaketSoals\Tables\PaketSoalsTable;
use App\Models\PaketSoal;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PaketSoalResource extends Resource
{
    protected static ?string $model = PaketSoal::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Paket Soal';

    public static function form(Schema $schema): Schema
    {
        return PaketSoalForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PaketSoalsTable::configure($table);
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
            'index' => ListPaketSoals::route('/'),
            'create' => CreatePaketSoal::route('/create'),
            'edit' => EditPaketSoal::route('/{record}/edit'),
        ];
    }
}
