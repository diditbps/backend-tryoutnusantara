<?php

namespace App\Filament\Resources\UserOligarkies;

use App\Filament\Resources\UserOligarkies\Pages\CreateUserOligarkie;
use App\Filament\Resources\UserOligarkies\Pages\EditUserOligarkie;
use App\Filament\Resources\UserOligarkies\Pages\ListUserOligarkies;
use App\Filament\Resources\UserOligarkies\Schemas\UserOligarkieForm;
use App\Filament\Resources\UserOligarkies\Tables\UserOligarkiesTable;
use App\Models\UserOligarkie;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class UserOligarkieResource extends Resource
{
    protected static ?string $model = UserOligarkie::class;
    protected static ?int $navigationSort = 5;
    protected static string | UnitEnum | null $navigationGroup = 'Manajemen User';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return UserOligarkieForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UserOligarkiesTable::configure($table);
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
            'index' => ListUserOligarkies::route('/'),
            'create' => CreateUserOligarkie::route('/create'),
            'edit' => EditUserOligarkie::route('/{record}/edit'),
        ];
    }
}
