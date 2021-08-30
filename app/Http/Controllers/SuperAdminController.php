<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class SuperAdminController extends Controller
{
    public function index(){
        return view('superAdmin.dashboard');
    }
    public function buatAkun(Request $request){
        $buatAkun = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role'  => 'admin',
            'remember_token' => Str::random(60)

        ]);
        return view('superAdmin.dashboard');
        
    }
}
