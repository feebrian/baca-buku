<x-guest-layout>
    <div class="p-4 bg-white rounded-md shadow">
        <h2 class="text-2xl font-semibold">Login</h2>
        <form action="{{ route('login.perform') }}" method="POST">
            @csrf
            <label class="block mt-4 ">
                <span class="text-gray-700">Email</span>
                <input type="email" name="email" placeholder="example@somewhere.com"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </label>
            <label class="block mt-4 ">
                <span class="text-gray-700">Password</span>
                <input type="password" name="password"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
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
</x-guest-layout>
