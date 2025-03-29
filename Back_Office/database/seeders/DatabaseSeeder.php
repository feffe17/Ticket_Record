<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Roles::class);
        $this->createUsers();
    }

    private function createUsers()
    {
        // Ottieni i ruoli
        $guestRole = Role::where('name', 'guest')->first();
        $operatorRole = Role::where('name', 'operator')->first();
        $adminRole = Role::where('name', 'admin')->first();

        // Creazione utenti con i rispettivi ruoli
        User::create([
            'name' => 'Guest',
            'surname' => 'Guest',
            'phone' => '1234567890',
            'email' => 'guest@example.com',
            'password' => Hash::make('Password123!'),
            'role_id' => $guestRole->id,
            'is_available' => false,
        ]);

        User::create([
            'name' => 'Operator',
            'surname' => 'Operator',
            'phone' => '0987654321',
            'email' => 'operator@example.com',
            'password' => Hash::make('Password123!'),
            'role_id' => $operatorRole->id,
            'is_available' => true,
        ]);

        User::create([
            'name' => 'Admin',
            'surname' => 'Admin',
            'phone' => '1122334455',
            'email' => 'admin@example.com',
            'password' => Hash::make('Password123!'),
            'role_id' => $adminRole->id,
            'is_available' => true,
        ]);
    }
}
