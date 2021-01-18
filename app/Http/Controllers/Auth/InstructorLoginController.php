<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class InstructorLoginController extends Controller
{
    public function __construct()
        {
        $this->middleware('guest:instructor');
        }

    public function ShowLoginForm()
        {
            return view('auth/instructor-login');
        }

    public function login(Request $request)
        {
            $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
            ]);

            if (Auth::guard('instructor')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember))
            {return redirect()->intended(route('instructor.index'));
            }

            return redirect()->back()->withInput($request->only('email', 'remember'));
            
        }
    
    //
}
