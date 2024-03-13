@extends('layouts.guest-layout')

@section('content')
    @csrf
    <div class="p-4 bg-white rounded-md shadow">
        <h2 class="text-2xl font-semibold">Login</h2>
        <form action="{{ route('login.perform') }}" method="POST">
            @csrf
            <label class="w-full max-w-xs form-control">
                <div class="label">
                    <span class="label-text">Email</span>
                </div>
                <input type="text" placeholder="example@somewhere.com" name="email"
                    class="w-full max-w-xs input input-bordered" autofocus />
            </label>
            <label class="w-full max-w-xs form-control">
                <div class="label">
                    <span class="label-text">Password</span>
                </div>
                <input type="password" name="password" class="w-full max-w-xs input input-bordered" />
            </label>
            <button type="submit"
                class="w-full py-2 mt-4 font-semibold text-white bg-blue-500 rounded-md hover:bg-blue-600 font">Sign
                In</button>

            <div class="mt-2 text-sm text-center">
                <span>Belum punya akun? <a href="{{ route('register.show') }}" class="text-blue-500 underline">Sign
                        Up</a>.</span>
            </div>
        </form>
    </div>
@endsection
