<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create or update admin (idempotent)
        Admin::updateOrCreate(
            ['username' => 'admin'],
            [
                'name' => 'Naya Admin',
                'email' => 'admin@beratandairyfarm.com',
                'password' => Hash::make('naya12345678'),
            ]
        );
    }
}
