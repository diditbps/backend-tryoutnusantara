<?php

namespace App\Filament\Resources\Soals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class SoalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('kode_jenistryout'),
                TextColumn::make('soal'),
                TextColumn::make('url_image'),
                TextColumn::make('kode_paket'),
                TextColumn::make('tingkat_kesulitan'),
                TextColumn::make('check_qc'),
                TextColumn::make('nama_qc')
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
