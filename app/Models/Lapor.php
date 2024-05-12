<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'alamatrumah',
        'bencana',
        'longitude',
        'latitude',
        'keterangan',
    ];
}
