<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarouselImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carouselImages = [
            [
                'title' => 'Image 1',
                'image_path' => null,
                'order_position' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Image 2',
                'image_path' => null,
                'order_position' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Image 3',
                'image_path' => null,
                'order_position' => 3,
                'is_active' => false,
            ],
        ];

        foreach ($carouselImages as $carouselImage) {
            \App\Models\CarouselImage::create($carouselImage);
        }
    }
}