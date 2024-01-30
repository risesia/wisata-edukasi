<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DaftarResource\Pages;
use App\Filament\Resources\DaftarResource\RelationManagers;
use App\Filament\Widgets\LatestDaftars;
use App\Models\Daftar;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DaftarResource extends Resource
{
    protected static ?string $model = Daftar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'List Pendaftaran';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_institusi')
                    ->maxLength(255)
                    ->required()
                    ->helperText('Nama intitusi, sekolah, atau kelompok belajar.')
                    ->placeholder('Sekolah Swasta Eksplorasi Edukasi'),

                Forms\Components\Textarea::make('alamat_institusi')
                    ->autosize()
                    ->maxLength(1024)
                    ->helperText('Alamat institusi, sekolah, atau kelompok belajar.')
                    ->placeholder('Jl. terminal, No. 88')
                    ->required(),

                Forms\Components\TextInput::make('nomor_institusi')
                    ->tel()
                    ->required()
                    ->placeholder('081234567890')
                    ->helperText('Nomor WhatsApp yang dapat dihubungi.'),

                DatePicker::make('tanggal_kunjungan')
                    ->helperText('Tenggal pelaksanaan wisata edukasi.')
                    ->displayFormat('d/m/Y')
                    ->required(),

                Forms\Components\Radio::make('paket')
                    ->required()
                    ->options([
                        'game' => 'Game Programming',
                        '3d' => '3D Printing',
                        'sablon' => 'Sabon Baju',
                        'komplit' => 'Komplit'
                    ])
                    ->descriptions([
                        'game' => 'Belajar membuat game seru dengan abang-abang profesional.',
                        '3d' => 'Buat barang-barang unik dengan printer 3D.',
                        'sablon' => 'Kreasi sablon dengan gambar yang dibuat sendiri.',
                        'komplit' => 'Semua paket.'
                    ]),
                // ->live(),

                Forms\Components\TextInput::make('jumlah_peserta')
                    ->numeric()
                    ->required()
                    ->helperText('Peserta yang akan hadir.'),
                    // ->minValue(//) // TODO minValue, maxValue, based on condition of Radio, eg. if game then min 5, max 10
                    // ->maxValue(//)

                // Forms\Components\Repeater::make('daftar_nama_peserta')
                //     ->simple(
                //         Forms\Components\TextInput::make('nama_peserta')
                //             ->required()
                //     )
                //     ->minItems(//) // TODO minItems, maxItems, based on condition of Radio, eg. if game then min 5, max 10
                //     ->maxItems(//)

//                Forms\Components\ToggleButtons::make('status')
//                    ->options([
//                        -
//                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('paket')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_institusi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_kunjungan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nomor_institusi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_peserta')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListDaftars::route('/'),
            'create' => Pages\CreateDaftar::route('/create'),
            'edit' => Pages\EditDaftar::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            LatestDaftars::class,
        ];
    }
}
