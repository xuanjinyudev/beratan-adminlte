<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Admin::create([
            'name' => 'Naya Admin',
            'username' => 'admin',
            'email' => 'admin@beratandairyfarm.com',
            'password' => bcrypt('naya12345678'),
        ]);
    }
}
