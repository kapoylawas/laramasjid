<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalSholat extends Model
{
    use HasFactory;

    protected $table = 'jadwal_sholats'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'name',
        'waktu',
    ];
}
