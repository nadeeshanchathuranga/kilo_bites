<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (!\App\Models\User::where('email', 'admin@admin.com')->exists()) {
            \App\Models\User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'role_type' => 'Admin',   // ⬅️ lowercase
                'password' => Hash::make('adminKiloBite@123'),
            ]);
        }

        if (!\App\Models\User::where('email', 'manager@manager.com')->exists()) {
            \App\Models\User::factory()->create([
                'name' => 'manager',
                'email' => 'manager@manager.com',
                'role_type' => 'Manager', // ⬅️ lowercase
                'password' => Hash::make('managerKiloBite@123'),
            ]);
        }

        if (!\App\Models\User::where('email', 't1@cashier.com')->exists()) {
            \App\Models\User::factory()->create([
                'name' => 'cashier',
                'email' => 't1@cashier.com',
                'role_type' => 'Cashier', // ⬅️ lowercase
                'password' => Hash::make('cashierKiloBite@123'),
            ]);
        }

       
    }
}
