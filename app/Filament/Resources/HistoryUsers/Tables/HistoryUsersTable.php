<?php

namespace App\Filament\Resources\HistoryUsers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class HistoryUsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('id_user')
                    ->searchable(),
                TextColumn::make('nama_paket_tryout')
                    ->searchable(),
                TextColumn::make('nama_paket_soal')
                    ->searchable(),
                TextColumn::make('score')
                    ->searchable(),
                TextColumn::make('total_correct')
                    ->searchable(),
                TextColumn::make('total_wrong')
                    ->searchable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('tanggal_completed')
                    ->searchable(),


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
