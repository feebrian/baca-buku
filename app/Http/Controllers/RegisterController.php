<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $credentials = $request->validated();

        if ($request->password != $request->repeat_password) {
            return back()
                ->with('error', 'Password missmatch');
        }

        $credentials['password'] = bcrypt($request->password);
        $credentials['slug'] = Str::of($request->username)->slug('-');
        $credentials['profile_picture'] = Gravatar::get($request->email);

        User::create($credentials);

        return redirect(route('login.show'));
    }
}
