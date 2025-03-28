<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Dashboard dinamica in base al ruolo
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    $user = Auth::user(); // Ora riconosce correttamente Auth::user()

    if (!$user) {
        return redirect()->route('login');
    }

    // dd(get_class($user), method_exists($user, 'getDashboardRoute'));
    // dd($user->getDashboardRoute());
    return redirect($user->getDashboardRoute());
})->name('dashboard');

// Rotte specifiche per i ruoli
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/operator/dashboard', function () {
        return view('operator.dashboard');
    })->name('operator.dashboard');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Rotte profilo utente
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Inclusione delle rotte di autenticazione
require __DIR__ . '/auth.php';
