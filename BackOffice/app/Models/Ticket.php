<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_number', 'title', 'status', 'priority', 'opened_by', 'assigned_to'];

    // Relazione n to 1 con l'utente che ha aperto il ticket.
    public function user()
    {
        return $this->belongsTo(User::class, 'opened_by');
    }

    // Relazione molti a uno con l'operatore a cui è assegnato il ticket.
    public function operator()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    // Relazione uno a molti con i commenti.
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
