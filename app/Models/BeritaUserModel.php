<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaUser extends Model
{
    use HasFactory;
    protected $fillable = ['alamat', 'tanggal', 'bencana', 'keterangan'];
}
