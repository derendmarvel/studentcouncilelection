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
            'name' => 'Admin',
            'email' => 'sa@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            // 'google_id' => null,
            'presence' => 0,
            'role'=> 1,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte@student.ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte1@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte2@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte3@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte4@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte5@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte6@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte7@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte8@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte9@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte10@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte11@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte12@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte13@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'sinte14@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'presence' => 0,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);
    }
}
