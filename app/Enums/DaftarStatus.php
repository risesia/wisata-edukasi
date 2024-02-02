<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum DaftarStatus: string implements HasColor, HasIcon, HasLabel
{
    case Baru = 'baru';

    case Diterima = 'diterima';

    case Dibatalkan = 'dibatalkan';

    case Selesai = 'selesai';

    public function getLabel(): string
    {
        return match ($this) {
            self::Baru => 'Baru',
            self::Diterima => 'Diterima',
            self::Dibatalkan => 'Dibatalkan',
            self::Selesai => 'Selesai',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Baru => 'info',
            self::Diterima, self::Selesai => 'success',
            self::Dibatalkan => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Baru => 'heroicon-m-sparkles',
            self::Diterima => 'heroicon-m-check-circle',
            self::Dibatalkan => 'heroicon-m-x-circle',
            self::Selesai => 'heroicon-m-academic-cap'
        };
    }
}
