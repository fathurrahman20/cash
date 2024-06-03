<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return inertia
        return inertia('Auth/Login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //set validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //get email and password from request
        $credentials = $request->only('email', 'password');

        //attempt to login
        if (auth()->attempt($credentials)) {
            $auth_user = FacadesAuth::user()->type_user;
             //regenerate session
             $request->session()->regenerate();
            if($auth_user == 2){
                return redirect()->route('mycourse.index');
            }
             //redirect route dashboard
             return redirect()->route('account.dashboard');
         }
 
         //if login fails
         return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ]);
    }

}
