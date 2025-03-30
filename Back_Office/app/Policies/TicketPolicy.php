<?php

namespace App\Policies;

use App\Models\Ticket;
use App\Models\User;

class TicketPolicy
{
    public function viewAny(User $user)
    {
        return in_array($user->role_id, [2, 3]);
    }

    public function view(User $user, Ticket $ticket)
    {
        return $user->role_id >= 2 || $user->id === $ticket->user_id;
    }

    public function delete(User $user, Ticket $ticket)
    {
        return $user->role_id === 3;
    }
}
