<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'Kim',
                'email' => 'kim@gmail.com',
                'message' => 'Hello, this is Kim. I want to ask about the product you sell. Can you give me more information about it?'
            ],
            [
                'name' => 'Rizal',
                'email' => 'rizal@gmail.com',
                'message' => 'Hello, this is Rizal. I want to ask about the product you sell. Can you give me more information about it?'
            ],
        ];

        foreach ($contacts as $contact) {
            \App\Models\Contact::create($contact);
        }

    }
}
