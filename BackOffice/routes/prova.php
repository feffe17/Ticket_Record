<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

//TUTTE LE ROUTE QUI HANNO PREFISSO /api COME SE FACESSERO PARTE DEL GROUP /api
//ES . /api/tickets

// Middleware di autenticazione per sessione
Route::middleware('auth')->group(function () {
    // Creazione ticket (accessibile a tutti i ruoli)
    Route::post('/tickets', [TicketController::class, 'create']);

    // Visualizzare i ticket (solo operatori e admin)
    Route::get('/tickets', [TicketController::class, 'index']);

    // Eliminare un ticket (solo admin)
    Route::delete('/tickets/{id}', [TicketController::class, 'destroy']);
});

Route::post('login', [AuthenticatedSessionController::class, 'store']);
