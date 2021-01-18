<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:instructor');
    }
    
    public function index()
    {
        return view('instructor.create');
    }
}
