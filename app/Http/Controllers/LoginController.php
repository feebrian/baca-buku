<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role == 'peminjam') {
                return redirect()->intended(route('home'));
            }

            if (auth()->user()->role == 'admin') {
                return redirect()->intended(route('admin.dashboard'));
            }
        }

        return back()->withErrors([
            'email' => 'Kredensial tidak valid',
        ])->onlyInput('email');
    }
}
