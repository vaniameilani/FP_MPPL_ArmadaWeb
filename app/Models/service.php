<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable = ['jenis_paket', 'durasi_latihan', 'pelajar_dan_mahasiswa', 'umum'];
}