<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_penyewa',
        'tanggal_sewa',
        'tanggal_serah',
        'lama_sewa',
        'status',
    ];
}