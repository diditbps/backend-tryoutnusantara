<?php

namespace App\Filament\Resources\Soals\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\MarkdownEditor;

class SoalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                // SEKSI ATAS: Metadata Soal
                Section::make('Informasi Soal')
                    ->schema([
                        Grid::make(2)->schema([
                            Select::make('nama_paket_soal')
                                ->relationship('paketSoal', 'nama_paket_soal')
                                ->required(),
                            Select::make('tingkat_kesulitan')
                                ->options([
                                    'mudah' => 'Mudah',
                                    'sedang' => 'Sedang',
                                    'sulit' => 'Sulit',
                                ])
                                ->required(),
                        ]),
                        
                        FileUpload::make('url_image')->image()->disk('public'),
                    ]),

                // SEKSI ATAS: Metadata Soal
                Section::make('Quality Control')
                    ->schema([
                        Grid::make(1)->schema([
                            TextInput::make('check_qc')
                            ->label("Check QC")->readOnly()->default("Uncheck")->required(),
                            TextInput::make('nama_qc')
                            ->label("Nama QC")->readOnly()->default("")->required(),
                        ]),
                    ]),

                // SEKSI TENGAH: Isi Soal
                Section::make('Konten')
                    ->schema([
                        MarkdownEditor::make('soal')
                            ->fileAttachmentsAcceptedFileTypes(['image/png', 'image/jpeg'])
                            ->required()
                            ->fileAttachmentsDisk('public') // Pastikan disk ini publik
                            ->fileAttachmentsDirectory('soal-images'),
                        
                        TextInput::make('hint')
                            ->required(),
                        TextInput::make('poin')
                            ->required(),
                    ]),

                Section::make('Opsi Jawaban')
                    ->description('Pilih radio button di samping input untuk menandai jawaban yang benar')
                    ->schema([
                        // Kita gunakan Grid 1 kolom untuk membungkus setiap baris jawaban
                        Grid::make(1)->schema([
                            
                            // Baris Pilihan 1
                            Grid::make(12)->schema([
                                Radio::make('jawaban')
                                    ->hiddenLabel()
                                    ->options(['pilihan1' => '']) // Label dikosongkan karena sudah ada TextInput
                                    ->columnSpan(1) // Radio kecil di sebelah kiri
                                    ->required(),
                                TextInput::make('pilihan1')
                                    ->hiddenLabel()
                                    ->placeholder('Isi Pilihan 1...')
                                    ->columnSpan(11) // Input teks panjang di sebelah kanan
                                    ->required(),
                            ])->extraAttributes(['class' => 'items-center netral-radio-fix']),

                            // Baris Pilihan 2
                            Grid::make(12)->schema([
                                Radio::make('jawaban')
                                    ->hiddenLabel()
                                    ->options(['pilihan2' => ''])
                                    ->columnSpan(1),
                                TextInput::make('pilihan2')
                                    ->hiddenLabel()
                                    ->placeholder('Isi Pilihan 2...')
                                    ->columnSpan(11)
                                    ->required(),
                            ])->extraAttributes(['class' => 'items-center']),

                            // Ulangi pola yang sama untuk pilihan 3, 4, dan 5...
                            Grid::make(12)->schema([
                                Radio::make('jawaban')
                                    ->hiddenLabel()
                                    ->options(['pilihan3' => ''])
                                    ->columnSpan(1),
                                TextInput::make('pilihan3')
                                    ->hiddenLabel()
                                    ->placeholder('Isi Pilihan 3...')
                                    ->columnSpan(11)
                                    ->required(),
                            ])->extraAttributes(['class' => 'items-center']),

                            Grid::make(12)->schema([
                                Radio::make('jawaban')
                                    ->hiddenLabel()
                                    ->options(['pilihan4' => ''])
                                    ->columnSpan(1),
                                TextInput::make('pilihan4')
                                    ->hiddenLabel()
                                    ->placeholder('Isi Pilihan 4...')
                                    ->columnSpan(11)
                                    ->required(),
                            ])->extraAttributes(['class' => 'items-center']),

                            Grid::make(12)->schema([
                                Radio::make('jawaban')
                                    ->hiddenLabel()
                                    ->options(['pilihan5' => ''])
                                    ->columnSpan(1),
                                TextInput::make('pilihan5')
                                    ->hiddenLabel()
                                    ->placeholder('Isi Pilihan 5...')
                                    ->columnSpan(11)
                                    ->required(),
                            ])->extraAttributes(['class' => 'items-center']),

                            MarkdownEditor::make('pembahasan')
                            ->fileAttachmentsAcceptedFileTypes(['image/png', 'image/jpeg'])
                            ->required()
                            ->fileAttachmentsDisk('public') // Pastikan disk ini publik
                            ->fileAttachmentsDirectory('soal-images'),
                        ]),
                    ]),

                
            ]);
    }
}
