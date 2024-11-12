@extends('layouts.default')

@section('content')
    <section class="min-h-80">
        <div class="container mx-auto flex justify-center items-center py-10 min-h-80">
            <div class="max-w-[350px] w-full bg-gray-100 p-6 rounded-lg">
                <h3 class="text-2xl font-black uppercase mb-4 text-center">Login</h3>

                <form action="{{ route('user.login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="form-input mt-1 block w-full rounded-md border-gray-300 py-1.5 px-3 border border-transparent focus:border focus:border-blue-500 focus:outline-0 transition ease-in-out duration-300">
                        <span class="text-red-500 text-sm">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" class="mt-1 block w-full rounded-md border-gray-300 py-1.5 px-3 border border-transparent focus:border focus:border-blue-500 focus:outline-0 transition ease-in-out duration-300">
                        <span class="text-red-500 text-sm">@error('password'){{ $message }}@enderror</span>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full transition ease-in-out duration-300">Login</button>

                        <a href="{{ route('user.register') }}" class="text-blue-500 text-center block mt-2">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.section -->
@endsection
