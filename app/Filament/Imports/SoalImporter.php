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
            ImportColumn::make('nama_paket_soal')
            ->rules(['required']),
            ImportColumn::make('tingkat_kesulitan')
            ->rules(['required']),
            ImportColumn::make('url_image'),
            ImportColumn::make('soal')
            ->rules(['required']),
            ImportColumn::make('pilihan1')
            ->rules(['required']),
            ImportColumn::make('pilihan2')
            ->rules(['required']),
            ImportColumn::make('pilihan3')
            ->rules(['required']),
            ImportColumn::make('pilihan4')
            ->rules(['required']),
            ImportColumn::make('pilihan5'),
            ImportColumn::make('jawaban')
            ->rules(['required']),
            ImportColumn::make('pembahasan'),
            ImportColumn::make('hint'),
            ImportColumn::make('poin')
            ->rules(['required']),
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
