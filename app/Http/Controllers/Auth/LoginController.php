<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function login(){
        $credentials = $this->validate(request(), [
            'cedula' => 'required|integer',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials)){

            return redirect()->route('dashboard');
        }

        return back()->withErrors(['cedula' => 'Estas credenciales no se encuentran en la base de datos'])->withInput(request(['cedula']));
    }


    public function showLoginForm(){
        return view('auth.login');
    }

    public function username()
    {
        return 'cedula';
    }

}
