<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Kim',
            'email' => 'maman@gmail.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Rizal',
            'email' => 'rizal@gmail.com',
        ]);

        $this->call([
            BookSeeder::class,
            CarouselImageSeeder::class,
            TestimonySeeder::class,
        ]);
    }
}