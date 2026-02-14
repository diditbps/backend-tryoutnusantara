<?php

namespace App\Filament\Resources\HistorySoals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class HistorySoalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_history_user')
                    ->searchable(),
                TextColumn::make('id_soal')
                    ->searchable(),
                TextColumn::make('jawaban_user')
                    ->searchable(),
                TextColumn::make('is_correct')
                    ->searchable()
                
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
