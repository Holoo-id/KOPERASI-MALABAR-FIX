<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();
        if(Hash::check($password,$data->password)){
            if($data->role == 'super_admin'){
                Session::put('name',$data->name);
                return view('super_admin.dashboard');
            }else{
                Session::put('name',$data->name);
                Session::put('id',$data->id);
                return view('admin.dashboard');
            }
        }

    }
    public function logout(){
        Auth::logout();
        return view('auth.login');
    }
}
