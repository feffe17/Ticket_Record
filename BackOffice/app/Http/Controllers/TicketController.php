<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    // Creazione di un nuovo ticket
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|in:normal,urgent',
        ]);

        $ticket = Ticket::create([
            'ticket_number' => 'TICKET-' . strtoupper(uniqid()),
            'title' => $request->title,
            'priority' => $request->priority,
            'status' => 'opened',
            'opened_by' => Auth::id(),
        ]);

        return response()->json($ticket, 201);
    }

    // Visualizzare tutti i ticket (solo operator e admin)
    public function index()
    {
        $user = Auth::user();

        if ($user->role_id == 2 || $user->role_id == 3) {
            $tickets = Ticket::with('user', 'operator')->get();
            return response()->json($tickets);
        }

        return response()->json(['message' => 'Non hai i permessi per visualizzare i ticket.'], 403);
    }

    // Elimina un ticket (solo admin)
    public function destroy($id)
    {
        $user = Auth::user();

        if ($user->role_id != 3) {
            return response()->json(['message' => 'Non hai i permessi per eliminare il ticket.'], 403);
        }

        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return response()->json(['message' => 'Ticket eliminato con successo.']);
    }
}
