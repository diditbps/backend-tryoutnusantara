<?php

namespace App\Filament\Resources\Soals\Pages;

use App\Filament\Resources\Soals\SoalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;
use App\Filament\Imports\SoalImporter;
// use Filament\Actions\ExportAction;

class ListSoals extends ListRecords
{
    protected static string $resource = SoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            Actions\ImportAction::make()
            ->importer(SoalImporter::class)
            ->label('Import Soal Excel') // Beri label yang jelas
            ->color('success')
            ->modalDescription('Unggah file .csv atau .xlsx yang berisi data soal.')
            ->modalHeading('Import Soal'),
        ];
    }
}
