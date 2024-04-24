<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function BlogStore(Request $request)
    {
        Blog::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'approved' => false, // Set approved status to false by default
        ]);

        return back()->with('success', 'Your blog has been submitted for approval.');

    }

    public function fullblog($blogId)
    {
        $blog = Blog::findOrFail($blogId);

        return view('blog.fullblog', compact('blog'));
    }
}
