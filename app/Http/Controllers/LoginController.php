<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    
    public function login(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();
            if(Auth::user()->role == 'super_admin'){
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('dashboard-admin');
            }
        }
        return back()->with('failed','Email atau Password anda salah!');

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginPage')->with('logoutmsg','Logout Success!');
    }
}