<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat', 'paket_kursus', 'pembayaran_op', 'total_pembayaran']; // array of field

  //   function Payment(){
	// 	return $this->belongsTo('App\Payment', 'pembayaran_op');
	// }
}
