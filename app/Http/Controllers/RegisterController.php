<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('user.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function register(Request $request){
        $credentials = $request-> validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            'email'=> 'required|email'
        ]);
        dd('registrasi berhasil!!');
        // User::create($credentials);
        // return view('/user/register');
    }
}
