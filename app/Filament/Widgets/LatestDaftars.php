<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\DaftarResource;
use App\Models\Daftar;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestDaftars extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';
    protected static ?string $heading = 'Pendaftaran Terbaru';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                DaftarResource::getEloquentQuery()
            )
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('nama_institusi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('paket')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_pendaftaran')
                    ->label('Status')
                    ->sortable()
                    ->badge(),
                Tables\Columns\TextColumn::make('tanggal_kunjungan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nomor_institusi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_peserta')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('open')
                    ->url(fn(Daftar $record): string => DaftarResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
