<?php

namespace App\Models;

use App\Enums\DaftarStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    protected $casts = [
        'status_pendaftaran' => DaftarStatus::class,
    ];
}
