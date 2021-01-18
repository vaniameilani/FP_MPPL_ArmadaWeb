<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class car extends Model
{
    use SoftDeletes;
    protected $fillable = ['merk_mobil', 'no_polisi', 'jenis_mesin', 'warna_mobil', 'tahun_mesin'];
}
