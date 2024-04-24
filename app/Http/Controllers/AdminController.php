<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $pendingBlogs = Blog::where('approved', false)->get();
        $approvedBlogs = Blog::where('approved', true)->get();

        return view('admin.AdminHome', compact('pendingBlogs', 'approvedBlogs'));
    }

    public function approveBlog(Blog $blog)
    {
        $blog->update(['approved' => true]);

        return redirect()->route('admin.dashboard')->with('success', 'Blog approved successfully.');
    }

    public function rejectBlog(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Blog rejected successfully.');
    }
}

