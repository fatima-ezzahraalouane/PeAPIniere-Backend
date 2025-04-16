<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin@123'),
            'role' => 'admin',
        ]);

        // Employé
        User::create([
            'name' => 'Employe',
            'email' => 'employee@gmail.com',
            'password' => Hash::make('Employee@123'),
            'role' => 'employee',
        ]);

        // Client
        User::create([
            'name' => 'Client',
            'email' => 'client@gmail.com',
            'password' => Hash::make('Client@123'),
            'role' => 'client',
        ]);
    }
}
