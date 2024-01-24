<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DaftarResource\Pages;
use App\Filament\Resources\DaftarResource\RelationManagers;
use App\Models\Daftar;
use Filament\Forms;
use Filament\Forms\Components;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DaftarResource extends Resource
{
    protected static ?string $model = Daftar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                    ->helperText('Nomor WhatsApp yang dapat dihubungi.'),

                Forms\Components\DatePicker::make('tanggal_kunjungan')
                    ->helperText('Tenggal pelaksanaan wisata edukasi.'),

                Forms\Components\Radio::make('paket')
                    ->options([
                        'game' => 'Game Programming',
                        '3d' => '3D Printing',
                        'sablon' => 'Sabon Baju',
                        'komplit' => 'Komplit'
                    ])
                    ->descriptions([
                        'game' => 'Minimal 5 peserta. Maksimal 25 peserta. Rp. 15.000/peserta',
                        '3d' => 'Minimal 10 peserta. Maksimal 30 peserta. Rp. 20.000/peserta',
                        'sablon' => 'Minimal 5 peserta. Maksimal 30 peserta. 30.000/peserta',
                        'komplit' => 'Minimal 10 peserta. Maksimal 40 peserta. Rp 55.000/peserta'
                    ]), 
                    // ->live(),
                
                Forms\Components\TextInput::make('jumlah_peserta')
                    ->numeric(),
                    // ->minValue(//) // TODO minValue, maxValue, based on condition of Radio, eg. if game then min 5, max 10
                    // ->maxValue(//)

                // Forms\Components\Repeater::make('daftar_nama_peserta')
                //     ->simple(
                //         Forms\Components\TextInput::make('nama_peserta')
                //             ->required()
                //     )
                //     ->minItems(//) // TODO minItems, maxItems, based on condition of Radio, eg. if game then min 5, max 10
                //     ->maxItems(//)
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
}
