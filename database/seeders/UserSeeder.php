<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'bma@ciputra.ac.id',
            'email_verified_at' => now(),
            'password'=>bcrypt('BMACiputra2024'),
            'role'=> 1,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'email' => 'dmarvelhanson@student.ciputra.ac.id',
            'email_verified_at' => now(),
            'password'=>bcrypt('derend'),
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);
    }
}
