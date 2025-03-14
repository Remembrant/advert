<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\MarkerController;
use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     Route::get('/dashboard', [MarkerController::class, 'index']);
//     // Route::get('/markers', [MarkerController::class, 'index']);
//     // Route::put('/markers/{id}', [MarkerController::class, 'update']);
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::redirect("/","/sites")->name('dashboard');

Route::middleware(["auth","verified"])->group(function () {
    Route::get('/sites', [SiteController::class, 'marker'])->name('site.marker');
    Route::get('/markers', [MarkerController::class, 'index']);
    // Route::put('/markers/{id}', [MarkerController::class, 'update']);
    // Route::get('/dashboard', [MarkerController::class, 'index']);
    Route::resource("site", SiteController::class);
    Route::resource("province", ProvinceController::class);
    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
