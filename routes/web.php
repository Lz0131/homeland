<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class,'index']) -> name('home');
Route::get('/buy', [SiteController::class,'buy']) -> name('buy');
Route::get('/rent', [SiteController::class,'rent']) -> name('rent');
Route::get('/properties', [SiteController::class,'properties']) -> name('properties');
Route::get('/about', [SiteController::class,'about']) -> name('about');
Route::get('/contact', [SiteController::class,'contact']) -> name('contact');
Route::get('/login', [SiteController::class,'login']) -> name('login');
Route::get('/register', [SiteController::class,'register']) -> name('register');
Route::get('/property-details', [SiteController::class,'property_details']) -> name('property-details');