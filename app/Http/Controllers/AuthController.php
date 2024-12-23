<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function authenticating(Request $request){
        $credentials = $request->validate([
            'username'  => ['required'],
            'password'  => ['required'],
        ]);

        // cek apakah login valid
        if (Auth::attempt($credentials)) {
            // cek apakah user status = active 
            if(Auth::user()->status != 'active'){
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                Session::flash('status', 'failed');
                Session::flash('message','Your account is not active yet. please contact admin!');
                return redirect('/login');
            }
            
            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return redirect('dashboard');
            }
            if(Auth::user()->role_id == 2){
                return redirect('profile');
            }
        }
        Session::flash('status', 'failed');
        Session::flash('message','Login Invalid');
        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function registerProcess(Request $request){
        $validated = $request->validate([
            'username'      => 'required|unique:users|max:255',
            'password'      => 'required|max:255',
            'phone'         => 'required|max:15',
            'address'       => 'required',
        ]);
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Regist success. Wait admin for approval');
        return redirect('register');
    }
}
