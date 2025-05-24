<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

// Home Route
Route::get('/', function () {
    return view('bookify');
})->name('home');

// Authentication Routes
Route::get('/auth', [AuthController::class, 'showAuthForm'])->name('auth.show');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');

// Event Routes
Route::get('/events', 'EventController@index')->name('events');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

// Booking Routes
Route::get('/booking', 'BookingController@index')->name('booking');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// Admin Routes
Route::get('/admin', 'AdminController@index')->name('admin');
Route::delete('/admin/users/{user}', [AdminController::class, 'destroyUser'])->name('admin.users.destroy');
Route::delete('/admin/events/{event}', [AdminController::class, 'destroyEvent'])->name('admin.events.destroy');