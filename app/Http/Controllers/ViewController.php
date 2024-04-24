<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('welcome', compact('blogs'));
    }



    public function search()
    {
        return view('searchhotels');
    }

    public function hoteldetails()
    {
        return view('hoteldetails');
    }

    public function hi()
    {
        return view('hi');
    }
}
