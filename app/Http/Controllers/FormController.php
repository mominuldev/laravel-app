<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required | string',
            'email' => 'required|email',
            'city'  => 'required | min:3 | max:50',
            'phone' => 'required|numeric|digits_between:10,12',
        ],
        [
            'name.required'  => 'Name is required',
            'email.required' => 'Email is required',
            'email.email'    => 'Please enter a valid email address',
            'city.required'  => 'City is required',
            'phone.required' => 'Phone is required',
        ]
        );


        return dd($request);

//        return redirect()->route('form.index')
//            ->with('success', 'Thanks for contacting us!');
    }
}
