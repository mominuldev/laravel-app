@extends('layouts.default')

@section('content')
    <section class="py-10">
        <div class="container mx-auto">

            <div class="w-[40rem] mx-auto bg-gray-100 p-8 rounded-xl">
                <h1 class="text-center font-black text-3xl mb-5">Form</h1>
                <form action="{{ route('form.store') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block font-medium text-black">Name</label>
                        <input type="text" name="name" id="name" class="border border-gray-300 py-2 px-3 w-full rounded-lg focus:outline-0 focus:border-blue-400 transition ease-in-out duration-300"
                               value="{{ old('name') }}">
                        <span class="{{ $errors->has('name') ? 'text-red-500' : 'hidden' }}">{{ $errors->first('name') }}</span>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block font-medium text-black">Email</label>
                        <input type="email" name="email" id="email" class="border border-gray-300 py-2 px-3 w-full rounded-lg focus:outline-0 focus:border-blue-400 transition ease-in-out duration-300" value="{{ old('email') }}">
                        <span class="{{ $errors->has('email') ? 'text-red-500' : 'hidden' }}">{{ $errors->first('email') }}</span>
                    </div>

                    <div class="mb-4">
                        <label for="city" class="block font-medium text-black">City</label>
                        <input type="text" name="city" id="city" class="border border-gray-300 py-2 px-3 w-full rounded-lg focus:outline-0 focus:border-blue-400 transition ease-in-out duration-300">
                        <span class="{{ $errors->has('city') ? 'text-red-500' : 'hidden' }}">{{ $errors->first('city') }}</span>
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block font-medium text-black">Phone</label>
                        <input type="text" name="phone" id="phone" class="border border-gray-300 py-2 px-3 w-full rounded-lg focus:outline-0 focus:border-blue-400 transition ease-in-out duration-300">
                        <span class="text-red-500">@error('phone'){{ $message }}@enderror</span>
                    </div>

                    <button type="submit" class="bg-blue-700 text-white py-3 px-5 mt-3 block w-full rounded-lg hover:bg-blue-800 transition ease-in-out duration-300">Submit</button>
                </form>
            </div>
        </div>
    </section>f

@endsection
