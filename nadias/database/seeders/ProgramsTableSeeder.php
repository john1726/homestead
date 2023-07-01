<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programs')->insert([
            [
                'title' => 'Women & Gender Affairs',
                'description' => 'Areas of focus: 1. Women Settlement Support 2. Girl Child Empowerment 3. Women Economic Security 4. HeforShe 5. Gender-based Violence',
                'display_order' => 1
            ],
            [
                'title' => 'Seniors Outreach',
                'description' => 'Areas of focus: 1. Healthy Aging 2. Preventing Abuse 3. Combating ageism, celebrating diverisyt and promoting inclusion 4. Improving seniors access to government services and benefits 5. Adapting seniors to virtual environment',
                'display_order' => 2
            ],
            [
                'title' => 'Careers & Education: Busaries & Scholarships',
                'description' => 'Please check back later for recent Bursary & Scholarship opportunities',
                'display_order' => 3
            ]                        
            ]);
    }
}
