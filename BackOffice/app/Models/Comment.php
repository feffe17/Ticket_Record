<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id', 'user_id', 'content'];

    // Relazione molti a uno con il ticket.
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    //Relazione molti a uno con l'utente che ha scritto il commento.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
