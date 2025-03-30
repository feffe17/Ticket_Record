<?php

namespace App\Providers;

use App\Models\Ticket;
use App\Policies\TicketPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Il mapping delle politiche per le diverse risorse.
     *
     * @var array
     */
    protected $policies = [
        Ticket::class => TicketPolicy::class,
    ];

    /**
     * Registra eventuali servizi di autorizzazione.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
