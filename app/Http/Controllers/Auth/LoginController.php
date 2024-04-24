<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    protected function redirectTo()
    {
        if (Auth::user()->isCustomer()) {
            return '/customer/dashboard';
        } elseif (Auth::user()->isAdmin()) {
            return '/admin/dashboard';
        } elseif (Auth::user()->isVehicleOwner()) {
            return '/vehicle-owner/dashboard';
        } elseif (Auth::user()->isHotelOwner()) {
            return '/hotel-owner/dashboard';
        } else {
            return '/home'; // Default redirect if user type not recognized
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
