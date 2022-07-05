<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'nama' => 'required|max:255',
            'username' => 'required',
            'password' => 'required|min:5',
            'confirm_password' => 'required:min:5',
            'email'=> 'required|email:dns|unique:users'
        ]);
        
        $credentials['password'] = Hash::make($credentials['password']);
        $credentials['confirm_password'] = Hash::make($credentials['confirm_password']);
    
        User::create($credentials);

        $request->session()->flash('success', 'Registrasi Berhasil, Silahkan Login!!'); 

        return view('/user/login');
    }
}
