<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    protected $username = 'username';

    protected function validator(array $data){
        return Validator::make($data,[
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'role'=>'required',
        ]);
    }

    protected function create(array $data){
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt ($data['password']),
            'role'=>'required',
        ]);
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function login(){
        return view('auths.login'); 
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect('/');
    }
}