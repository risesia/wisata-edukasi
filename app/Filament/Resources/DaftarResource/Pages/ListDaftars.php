<?php

namespace App\Filament\Resources\DaftarResource\Pages;

use App\Filament\Resources\DaftarResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListDaftars extends ListRecords
{
    protected static string $resource = DaftarResource::class;

    protected static ?string $title = 'List Pendaftaran';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),
            'baru' => Tab::make()->query(fn ($query) => $query->where('status_pendaftaran', 'baru')),
            'diterima' => Tab::make()->query(fn ($query) => $query->where('status_pendaftaran', 'diterima')),
            'dibatalkan' => Tab::make()->query(fn ($query) => $query->where('status_pendaftaran', 'dibatalkan')),
            'selesai' => Tab::make()->query(fn ($query) => $query->where('status_pendaftaran', 'selesai')),
        ];
    }
}
