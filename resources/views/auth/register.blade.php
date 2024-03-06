@extends('layouts.guest-layout')

@section('content')
    <div class="p-4 bg-white rounded-md shadow">
        <h2 class="text-2xl font-semibold">Register</h2>
        <form action="{{ route('register.perform') }}" method="POST">
            @csrf
            <label class="w-full max-w-xs form-control">
                <div class="label">
                    <span class="label-text">Username</span>
                </div>
                <input type="text" placeholder="ladybug" name="username" class="w-full max-w-xs input input-bordered" />
            </label>
            <label class="w-full max-w-xs form-control">
                <div class="label">
                    <span class="label-text">Email</span>
                </div>
                <input type="email" placeholder="example@somewhere.com" name="email"
                    class="w-full max-w-xs input input-bordered" />
            </label>
            <label class="w-full max-w-xs form-control">
                <div class="label">
                    <span class="label-text">What is your name?</span>
                </div>
                <input type="password" name="password" class="w-full max-w-xs input input-bordered" />
            </label>
            <label class="block mt-4 ">
                <span class="text-gray-700">Repeat passowrd</span>
                <input type="password" name="repeat_password"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </label>
            <button type="submit"
                class="w-full py-2 mt-4 font-semibold text-white bg-blue-500 rounded-md hover:bg-blue-600 font">Sign
                Up</button>

            <div class="mt-2 text-sm text-center">
                <span>Sudah punya akun? <a href="{{ route('login.show') }}" class="text-blue-500 underline">Log
                        in</a>.</span>
            </div>
        </form>
    </div>
@endsection
