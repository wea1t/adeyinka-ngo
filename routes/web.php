<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NgoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\FoundationController;
use App\Http\Controllers\Admin\NgoController as AdminNgoController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Home
Route::view('/', 'home')->name('home');

// Auth
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Donations
Route::get('/donate', [DonationController::class, 'index'])->name('donate.form');
Route::post('/donate', [DonationController::class, 'submit'])->name('donate.submit');
// Alias URLs to prevent 404
Route::get('/donation', fn() => redirect()->route('donate.form'));
Route::post('/donation', fn() => redirect()->route('donate.submit'));

// Volunteer
Route::post('/volunteer', [VolunteerController::class, 'submit'])->name('volunteer.submit');

// Foundation
Route::get('/foundation', [FoundationController::class, 'index'])->name('foundation');

// Contact
Route::view('/contact-us', 'contact-us')->name('contact.us');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// About
Route::view('/about-us', 'about-us')->name('about.us');

// Public NGO pages
Route::get('/ngo', [NgoController::class, 'showForm'])->name('ngo.form'); // NGO submission form
Route::post('/ngo', [NgoController::class, 'submitForm'])->name('ngo.submit');

// Public list of NGOs (if needed later)
Route::get('/ngos', [NgoController::class, 'index'])->name('ngos.index');
Route::get('/ngos/{ngo}', [NgoController::class, 'show'])->name('ngos.show');

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Admin NGO management
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/ngos', [AdminNgoController::class, 'index'])->name('ngos.index');
        Route::get('/ngos/create', [AdminNgoController::class, 'create'])->name('ngos.create');
        Route::post('/ngos', [AdminNgoController::class, 'store'])->name('ngos.store');
    });

    // Other authenticated pages
    Route::view('/search', 'search')->name('search');

    Route::prefix('who-we-are')->group(function () {
        Route::view('/', 'who-we-are.overview')->name('who.we.are');
        Route::view('/leaders', 'who-we-are.leaders')->name('leaders');
        Route::view('/trustees', 'who-we-are.trustees')->name('trustees');
    });

    Route::view('/what-we-do', 'what-we-do')->name('what.we.do');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::view('/who-we-are/leaders', 'who-we-are.leaders')->name('leaders');
Route::view('/who-we-are/trustees', 'who-we-are.trustees')->name('trustees');
