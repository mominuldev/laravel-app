@extends('layouts.default')

@section('content')
    <section class="py-10">
        <div class="container mx-auto flex justify-center py-10">
            <div class="max-w-[450px] w-full bg-gray-100 p-6 rounded-lg">
                <h3 class="text-2xl font-black uppercase mb-4 text-center">Login</h3>

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" class="form-input mt-1 block w-full rounded-md border-gray-300 py-1.5 px-3 border border-transparent focus:border focus:border-blue-500 focus:outline-0 transition ease-in-out duration-300" value="{{ old('name') }}">
                        <span class="text-red-500 text-sm">@error('name'){{ $message }}@enderror</span>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-input mt-1 block w-full rounded-md border-gray-300 py-1.5 px-3 border border-transparent focus:border focus:border-blue-500 focus:outline-0 transition ease-in-out duration-300">
                        <span class="text-red-500 text-sm">@error('email'){{ $message }}@enderror</span>
                    </div>


                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-input mt-1 block w-full rounded-md border-gray-300 py-1.5 px-3 border border-transparent focus:border focus:border-blue-500 focus:outline-0 transition ease-in-out duration-300">
                        <span class="text-red-500 text-sm">@error('phone'){{ $message }}@enderror</span>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" value="{{ old('password') }}" class="mt-1 block w-full rounded-md border-gray-300 py-1.5 px-3 border border-transparent focus:border focus:border-blue-500 focus:outline-0 transition ease-in-out duration-300">
                        <span class="text-red-500 text-sm">@error('password'){{ $message }}@enderror</span>
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password') }}" class="mt-1 block w-full rounded-md border-gray-300 py-1.5 px-3 border border-transparent focus:border focus:border-blue-500 focus:outline-0 transition ease-in-out duration-300">
                        <span class="text-red-500 text-sm">@error('password_confirmation'){{ $message }}@enderror</span>
                    </div>

                    <div class="mb-4">
                        <label for="avatar" class="block text-sm font-medium text-gray-700">Avatar</label>
                        <input type="file" name="avatar" id="avatar" value="{{ old('avatar') }}" class="form-input mt-1 block w-full rounded-md border-gray-300 py-1.5 px-3 border border-transparent focus:border focus:border-blue-500 focus:outline-0 transition ease-in-out duration-300">
                        <span class="text-red-500 text-sm">@error('avatar'){{ $message }}@enderror</span>
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full transition ease-in-out duration-300">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.section -->
@endsection
