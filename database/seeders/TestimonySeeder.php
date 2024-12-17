<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonies = [
            [
                'name' => 'Nvxxe',
                'occupation' => 'entrepreneur',
                'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'avatar' => null,
            ],
            [
                'name' => 'Rizal',
                'occupation' => 'teacher',
                'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'avatar' => null,
            ],
            [
                'name' => 'Mr Delax',
                'occupation' => 'student',
                'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'avatar' => null,
            ],
        ];

        foreach ($testimonies as $testimony) {
            \App\Models\Testimony::create($testimony);
        }
    }
}