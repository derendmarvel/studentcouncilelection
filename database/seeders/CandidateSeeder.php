<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Candidate::create([
            'names' => 'Ida Bagus Radhita & Nathan',
            'number_of_votes' => 0,
            'photo' => '/images/Candidates 1.png'
        ]);   

        Candidate::create([
            'names' => 'Michael David Sin & Richie',
            'number_of_votes' => 0,
            'photo' => '/images/Candidates 2.png'
        ]);   
    }
}
