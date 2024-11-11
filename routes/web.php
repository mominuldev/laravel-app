<?php

use App\Http\Controllers\Blog;
use App\Http\Controllers\Pages;
use App\Http\Controllers\UserController;
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


