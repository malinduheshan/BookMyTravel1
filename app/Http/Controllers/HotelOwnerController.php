<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelOwnerController extends Controller
{
    public function dashboard()
    {

        return view('hotelowner.HotelOwnerHome');
    }
}
