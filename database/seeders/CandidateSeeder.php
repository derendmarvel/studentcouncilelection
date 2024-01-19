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
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime quam eaque dolores est quia libero inventore autem veniam? Tempora nam odit eos eveniet aliquam laborum blanditiis nostrum minima, labore placeat.',
            'vision_mission' => 'To make UC great again',
            'number_of_votes' => 902,
            'photo' => '/images/Candidates 1.png'
        ]);   

        Candidate::create([
            'names' => 'Michael David Sin & Richie',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime quam eaque dolores est quia libero inventore autem veniam? Tempora nam odit eos eveniet aliquam laborum blanditiis nostrum minima, labore placeat.',
            'vision_mission' => 'To make UC great again',
            'number_of_votes' => 1049,
            'photo' => '/images/Candidates 2.png'
        ]);   
    }
}
