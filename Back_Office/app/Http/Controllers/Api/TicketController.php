<?php

// namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
// use App\Models\Ticket;
// use App\Policies\TicketPolicy;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Auth\Access\AuthorizationException;

// class TicketApiController extends Controller
// {
//     public function index()
//     {
//         $user = Auth::user();

//         if ($user->role_id >= 2) {
//             return Ticket::all();
//         }

//         return Ticket::where('user_id', $user->id)->get();
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'description' => 'required|string',
//         ]);

//         $ticket = Ticket::create([
//             'user_id' => Auth::id(),
//             'title' => $request->title,
//             'description' => $request->description,
//             'status' => 'open',
//         ]);

//         return response()->json($ticket, 201);
//     }

//     public function show($id)
//     {
//         $ticket = Ticket::findOrFail($id);

//         $this->authorize('view', $ticket);

//         return response()->json($ticket);
//     }

//     public function destroy($id)
//     {
//         $ticket = Ticket::findOrFail($id);

//         $this->authorize('delete', $ticket);

//         $ticket->delete();

//         return response()->json(['message' => 'Ticket eliminato'], 200);
//     }
// }
