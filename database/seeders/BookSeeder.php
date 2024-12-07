<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Laskar Pelangi',
                'slug' => 'laskar-pelangi',
                'author' => 'Andrea Hirata',
                'description' => 'Kisah inspiratif sekelompok anak di Belitung yang penuh semangat untuk menggapai mimpi mereka meski dengan keterbatasan.',
                'published_at' => '2005-09-01',
                'cover' => 'https://upload.wikimedia.org/wikipedia/id/8/8e/Laskar_pelangi_sampul.jpg',
                'status' => 'published',
            ],
            [
                'title' => 'Bumi',
                'slug' => 'bumi',
                'author' => 'Tere Liye',
                'description' => 'Petualangan Raib, Seli, dan Ali menjelajahi dunia paralel yang penuh misteri.',
                'published_at' => '2014-01-01',
                'cover' => 'https://cdn.gramedia.com/uploads/items/9786020332956_Bumi-New-Cover.jpg',
                'status' => 'published',
            ],
            [
                'title' => 'Tetralogi Buru: Bumi Manusia',
                'slug' => 'bumi-manusia',
                'author' => 'Pramoedya Ananta Toer',
                'description' => 'Sebuah kisah epik perjuangan Minke melawan ketidakadilan di zaman kolonial.',
                'published_at' => '1980-01-01',
                'cover' => 'https://maisyafarhati.com/wp-content/uploads/2013/12/bumi-manusia.jpg',
                'status' => 'published',
            ],
            [
                'title' => 'Dilan: Dia adalah Dilanku Tahun 1990',
                'slug' => 'dilan-dia-adalah-dilanku-tahun-1990',
                'author' => 'Pidi Baiq',
                'description' => 'Kisah cinta remaja antara Dilan dan Milea yang penuh romantika dan kenangan.',
                'published_at' => '2014-01-01',
                'cover' => 'https://cdn.gramedia.com/uploads/items/9786027870864_dilan-1990.jpg',
                'status' => 'published',
            ],
            [
                'title' => 'Negeri 5 Menara',
                'slug' => 'negeri-5-menara',
                'author' => 'Ahmad Fuadi',
                'description' => 'Cerita tentang persahabatan dan perjuangan enam santri di pesantren untuk meraih mimpi besar.',
                'published_at' => '2009-01-01',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1249749162i/6688121.jpg',
                'status' => 'published',
            ],
        ];

        foreach ($books as $book) {
            \App\Models\Book::create($book);
        }
    }
}
