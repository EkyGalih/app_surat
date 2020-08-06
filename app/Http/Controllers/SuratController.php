<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function welcome(){
    	return view('welcome');
    }

    public function beranda(){
    	return view('beranda');
    }

    public function register(){
    	return view('auth.register');
    }

    public function layout(){
    	return view('layout');
    }

    public function help(){
    	return view('help');
    }
}
