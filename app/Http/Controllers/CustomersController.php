<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        // home page adalah halaman pemesanan untuk customer
        return view('customer.index');        
    }
}
