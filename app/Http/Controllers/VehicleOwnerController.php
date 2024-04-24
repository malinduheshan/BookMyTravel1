<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class VehicleOwnerController extends Controller
{
    public function dashboard()
    {
        $blogs = Blog::all();

        return view('vehicleowner.vehicleownerhome', compact('blogs'));
    }
}
