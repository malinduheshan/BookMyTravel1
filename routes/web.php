<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HotelOwnerController;
use App\Http\Controllers\VehicleOwnerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('blogcreate');


Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/blogs/{blog}/approve', [AdminController::class, 'approveBlog'])->name('admin.blogs.approve');
    Route::post('/admin/blogs/{blog}/reject', [AdminController::class, 'rejectBlog'])->name('admin.blogs.reject');

    Route::get('/customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
    Route::get('/vehicle-owner/dashboard', [VehicleOwnerController::class, 'dashboard'])->name('vehicle-owner.dashboard');
    Route::get('/hotel-owner/dashboard', [HotelOwnerController::class, 'dashboard'])->name('hotel_owner.dashboard');

});



Route::get('/', [ViewController::class, 'index'])->name('home');
Route::get('/search', [ViewController::class, 'search'])->name('home');
Route::get('/hotel', [ViewController::class, 'hoteldetails'])->name('home');


Route::get('/dashboard', 'DashboardController@index')->middleware('auth');


//BlogPost
Route::post('/blogs/store', [BlogController::class, 'BlogStore'])->name('BlogStore');
Route::get('/blogs/{blogId}/show', [BlogController::class, 'fullblog'])->name('fullblog');