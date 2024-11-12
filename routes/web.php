<?php

use App\Http\Controllers\Blog;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Pages;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', [Pages::class, 'index'])->name('home');
// About page
Route::get('/about', [Pages::class, 'about'])->name('about');
// Services page
Route::get('/services', [Pages::class, 'services'])->name('services');
// Contact page
Route::get('/contact', [Pages::class, 'contact'])->name('contact');
// Blog
Route::get('/blog', [Blog::class, 'index'])->name('blog');

// Search
Route::get('/search', [Blog::class, 'search'])->name('search');

// Form
Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/form', [FormController::class, 'store'])->name('form.store');

// User
Route::get('/user-login', [UserController::class, 'loginPage'])->name('user.loginpage');
Route::post('/login', [UserController::class, 'login'])->name('user.login')->middleware(AuthMiddleware::class);
// User Dashboard
Route::get('/dashboard', [UserController::class, 'userDashboard'])->name('user.dashboard');
// Admin Dashboard
Route::get('/admin/dashboard', [UserController::class, 'adminDashboard'])->name('admin.dashboard');

Route::get('/register', [UserController::class, 'register'])->name('user.register');
// User Store
Route::post('/register', [UserController::class, 'store'])->name('user.store');
// Logout
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');
// User Profile
Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');

