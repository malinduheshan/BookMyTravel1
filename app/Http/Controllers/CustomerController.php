<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
    {
        // $blogs = Blog::all();
        $blogs = Blog::where('approved', true)->get();

        return view('customer.CustomerHome', compact('blogs'));
    }
}
