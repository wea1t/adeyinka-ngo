<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\NgoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\FoundationController;
use App\Http\Controllers\Admin\NgoController as AdminNgoController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Home
Route::view('/', 'home')->name('home');

// NOTE: registration and login routes removed to provide a simple public website

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

// Privacy & Policy
Route::view('/privacy-policy', 'privacy-policy')->name('privacy.policy');

// Public informational pages requested for guest navigation
Route::view('/who-we-are', 'who-we-are.overview')->name('who.we.are');
Route::view('/what-we-do', 'what-we-do')->name('what.we.do');
Route::view('/mentorship', 'mentorship')->name('mentorship');
Route::view('/our-team', 'our-team')->name('our.team');
Route::view('/our-impact', 'our-impact')->name('our.impact');
Route::view('/matchmaking', 'matchmaking')->name('matchmaking');

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

    // (authenticated-only pages kept here if needed)

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::view('/who-we-are/leaders', 'who-we-are.leaders')->name('leaders');
Route::view('/who-we-are/trustees', 'who-we-are.trustees')->name('trustees');

/*
|--------------------------------------------------------------------------
| Utility: Clear caches (protected)
|--------------------------------------------------------------------------
|
| This route runs several Artisan cache/clear commands. It is protected by
| a secret token set in the environment variable `ADMIN_CLEAR_CACHE_TOKEN`.
| Call it via: /clear-cache?token=your_token
|
*/
Route::get('/clear-cache', function (Request $request) {
    $token = env('ADMIN_CLEAR_CACHE_TOKEN');
    // if (! $token || $request->query('token') !== $token) {
    //     abort(403, 'Forbidden');
    // }

    $commands = [
        'config:clear',
        'cache:clear',
        'route:clear',
        'view:clear',
        'config:cache',
        'optimize:clear',
    ];

    $results = [];
    foreach ($commands as $cmd) {
        Artisan::call($cmd);
        $results[$cmd] = trim(Artisan::output());
    }

    return response()->json([
        'status' => 'ok',
        'results' => $results,
    ]);
})->name('admin.clear-cache');
