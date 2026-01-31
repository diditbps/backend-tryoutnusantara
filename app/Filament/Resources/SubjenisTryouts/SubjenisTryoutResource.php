<?php

namespace App\Filament\Resources\SubjenisTryouts;

use App\Filament\Resources\SubjenisTryouts\Pages\CreateSubjenisTryout;
use App\Filament\Resources\SubjenisTryouts\Pages\EditSubjenisTryout;
use App\Filament\Resources\SubjenisTryouts\Pages\ListSubjenisTryouts;
use App\Filament\Resources\SubjenisTryouts\Schemas\SubjenisTryoutForm;
use App\Filament\Resources\SubjenisTryouts\Tables\SubjenisTryoutsTable;
use App\Models\SubjenisTryout;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SubjenisTryoutResource extends Resource
{
    protected static ?string $model = SubjenisTryout::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'SubJenis Tryout';

    public static function form(Schema $schema): Schema
    {
        return SubjenisTryoutForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SubjenisTryoutsTable::configure($table);
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
            'index' => ListSubjenisTryouts::route('/'),
            'create' => CreateSubjenisTryout::route('/create'),
            'edit' => EditSubjenisTryout::route('/{record}/edit'),
        ];
    }
}
