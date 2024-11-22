<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('workshops', WorkshopController::class)->middleware('auth', 'role:admin');
Route::post('workshops/{workshop}/register', [RegistrationController::class, 'store'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/workshops/{workshop}/register', [RegistrationController::class, 'store'])->name('register.workshop');
Route::middleware(['auth'])->group(function () {
    Route::get('/workshops/{workshop}/register', [RegistrationController::class, 'show'])->name('register.workshop');
    Route::post('/workshops/{workshop}/register', [RegistrationController::class, 'store'])->name('register.workshop.store');
});

Route::resource('workshops', WorkshopController::class)->middleware('auth', 'role:admin');
Route::delete('workshops/{workshopId}/cancel', [WorkshopController::class, 'cancel'])->name('workshops.cancel');
Route::delete('/workshops/cancel/{id}', [RegistrationController::class, 'destroy'])->name('workshops.cancel');


require __DIR__.'/auth.php';
