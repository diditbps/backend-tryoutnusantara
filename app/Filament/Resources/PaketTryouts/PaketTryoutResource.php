<?php

namespace App\Filament\Resources\PaketTryouts;

use App\Filament\Resources\PaketTryouts\Pages\CreatePaketTryout;
use App\Filament\Resources\PaketTryouts\Pages\EditPaketTryout;
use App\Filament\Resources\PaketTryouts\Pages\ListPaketTryouts;
use App\Filament\Resources\PaketTryouts\Schemas\PaketTryoutForm;
use App\Filament\Resources\PaketTryouts\Tables\PaketTryoutsTable;
use App\Models\PaketTryout;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PaketTryoutResource extends Resource
{
    protected static ?string $model = PaketTryout::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PaketTryoutForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PaketTryoutsTable::configure($table);
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
            'index' => ListPaketTryouts::route('/'),
            'create' => CreatePaketTryout::route('/create'),
            'edit' => EditPaketTryout::route('/{record}/edit'),
        ];
    }
}
