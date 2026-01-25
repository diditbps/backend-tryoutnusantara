<?php

namespace App\Filament\Imports;

use App\Models\Soal;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class SoalImporter extends Importer
{
    protected static ?string $model = Soal::class;

    public static function getColumns(): array
    {
        return [
            //
            ImportColumn::make('kode_jenistryout'),
            ImportColumn::make('kode_paket'),
            ImportColumn::make('is_event'),
            ImportColumn::make('soal'),
            ImportColumn::make('pilihan1'),
            ImportColumn::make('pilihan2'),
            ImportColumn::make('pilihan3'),
            ImportColumn::make('pilihan4'),
            ImportColumn::make('pilihan5'),
            ImportColumn::make('url_image'),
            ImportColumn::make('jawaban'),
            ImportColumn::make('tingkat_kesulitan'),
            ImportColumn::make('check_qc'),
            ImportColumn::make('nama_qc'),
        ];
    }

    public function resolveRecord(): Soal
    {
        return new Soal();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your soal import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
