<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('hello.login.index');
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            if(Auth::user()->level == 'user') {
                return redirect()->intended('/pengaduan')->with('success', 'Login Success!'); 
            }elseif (Auth::user()->level == 'petugas' || 'admin') {
                return redirect()->intended('/petugas')->with('success', 'Login Success!');
            }
            
            // return redirect()->intended('/pengaduan')->with('success', 'Login Success!');          
        
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
