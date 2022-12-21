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
        $request->validate([
            'username' => ['required', 'min:5', 'unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'alpha_num', 'min:6', 'confirmed']
        ]);

        $data = $request->except('password_confirmation');
        $data['image'] = '/images/user/Default.png';
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $creds = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($creds)){
            if($request->remember){
                Cookie::queue(Cookie::forever('mycookie', $request->email));
            }
            else{
                Cookie::queue(Cookie::forget('mycookie'));
            }

            $request->session()->regenerate();
            return redirect('/movies');
        }

        return redirect('login')->with('error', 'Invalid username/password! Please register if you don\'t have an account.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function show()
    {
        $user = User::find(Auth::id());
        return view('user.show', ['user' => $user]);
    }

    public function edit()
    {
        $user = User::find(Auth::id());
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:5'],
            'email' => ['required', 'email'],
            'DOB' => ['required', 'date'],
            'phone' => ['required', 'min:5', 'max:13']
        ]);

        $user = User::find(Auth::id());
        $data = $request->all();
        $user->update($data);
        return redirect('/profile');
    }

}
