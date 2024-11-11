<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function post($id)
    {
        return view('blog.post', ['id' => $id]);
    }

    public function search()
    {
        return view('blog.search');
    }
}
