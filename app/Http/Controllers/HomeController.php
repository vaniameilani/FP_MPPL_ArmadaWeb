<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        // home page adalah halaman pemesanan untuk customer
        $services = \App\Models\service::all();
        // $users = Auth::User();
        // if(isset($catalogs)) echo $catalogs;
        // $catalogs->dd();
        return view('order.home', ['services' => $services]);        
    }

}
