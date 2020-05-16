<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class Authcontroller extends Controller
{
    public function register(Request $request){
        $data=[
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'register_as'=>$request->get('register_as')
        ];
        User::create($data);
        return redirect()->route('home')->with('flash_success','User registered succesfully');
    }

    public function login(Request $request){
        $credentials=['email'=>$request->get('email'),'password'=>$request->get('password')];
        if(Auth::attempt($credentials)){
            return redirect()->route('loggedin')->with('flash_success','Login Successful');
        }else{
            return redirect()->route('home')->with('flash_success','Login Failed');
        }
    }
}
