<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $data = $request->all();
        $data['image'] = 'Default.png';
        $data['password'] = bcrypt($data['password']);
        return User::create($data);

    }

    public function login(Request $request)
    {
        $creds = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if($request->remember){
            Cookie::queue(Cookie::forever('mycookie', $request->email));
        }
        else{
            Cookie::queue(Cookie::forget('mycookie'));
        }

        if(Auth::attempt($creds)){
            return 'Success';
        }

        return 'Invalid username/password! Please register if you don\'t have an account.';
    }

}
