<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function loginPage()
    {
        return view('users.login');
    }

    // Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register()
    {
        return view('users.register');
    }

    // Store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
//            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'numeric',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
//            'avatar' => $request->file('avatar')->store('avatars'),
            'phone' => $request->phone,
        ]);

        auth()->login($user);

        return redirect('/');
    }

    // Profile
    public function profile()
    {
        return 'Profile';
    }

    // User Dashboard
    public function userDashboard()
    {
        return view('user.dashboard');
    }

    // Admin Dashboard
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    // Logout
    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
