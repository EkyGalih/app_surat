<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AuthController extends Controller
{
	public function register(){
		return view('auth.register');
	}

    public function login(){
    	return view('auth.login');
    }

    public function postLogin(Request $r){
    	if (Auth::attempt(['username' => $r->input('username'), 'password' => $r->input('password')], $r->input('remember'))) {
            // Authentication passed...
            return redirect()->intended('welcome');
        }else{
            Session::put('fail', 'Kombinasi username dan password anda salah');
            return redirect('login');
        }
    }

    public function logout(){
       Auth::logout();
       return redirect('login');
   }
}
