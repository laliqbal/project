<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'username' => ['required', 'unique:users', 'min:5', 'max:50'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Successfully! Please Log In Now');
    }


    public function login()
    {
        if (Auth::check()) {
            return redirect('/admin/dashboard');
        } else {
            return view('auth.login', [
                'title' => 'Login'
            ]);
        }
    }

    public function credentials(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index');
        }
        return back()->with('loginError', 'Login Gagal Boss');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }
}
