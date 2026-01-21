<?php

namespace App\Filament\Resources\JenisTryouts;

use App\Filament\Resources\JenisTryouts\Pages\CreateJenisTryout;
use App\Filament\Resources\JenisTryouts\Pages\EditJenisTryout;
use App\Filament\Resources\JenisTryouts\Pages\ListJenisTryouts;
use App\Filament\Resources\JenisTryouts\Schemas\JenisTryoutForm;
use App\Filament\Resources\JenisTryouts\Tables\JenisTryoutsTable;
use App\Models\JenisTryout;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JenisTryoutResource extends Resource
{
    protected static ?string $model = JenisTryout::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return JenisTryoutForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JenisTryoutsTable::configure($table);
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
            'index' => ListJenisTryouts::route('/'),
            'create' => CreateJenisTryout::route('/create'),
            'edit' => EditJenisTryout::route('/{record}/edit'),
        ];
    }
}
