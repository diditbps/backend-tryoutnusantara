<?php

namespace App\Filament\Resources\HistoryUsers;

use App\Filament\Resources\HistoryUsers\Pages\CreateHistoryUser;
use App\Filament\Resources\HistoryUsers\Pages\EditHistoryUser;
use App\Filament\Resources\HistoryUsers\Pages\ListHistoryUsers;
use App\Filament\Resources\HistoryUsers\Schemas\HistoryUserForm;
use App\Filament\Resources\HistoryUsers\Tables\HistoryUsersTable;
use App\Models\HistoryUser;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HistoryUserResource extends Resource
{
    protected static ?string $model = HistoryUser::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return HistoryUserForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HistoryUsersTable::configure($table);
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
            'index' => ListHistoryUsers::route('/'),
            'create' => CreateHistoryUser::route('/create'),
            'edit' => EditHistoryUser::route('/{record}/edit'),
        ];
    }
}
