<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function viewregister(){
        return view('signup');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'fullname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'name' => $request->fullname,
            'role' => 'admin'
        ])
        ->save();

        if($user){
            return redirect()->route('login');
        }

        Auth::attempt(['username' => $request->username, 'password' => $request->password]);

        return redirect()->route('dashboard');
    }

    public function login(Request $request){
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('error', 'Invalid username or password');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
