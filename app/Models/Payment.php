<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['pembayaran_op']; // array of field

    // function Order(){
	// 	return $this->hasMany('App\Order', 'pembayaran_op');
	// }
}
