<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        // ambil id author berdasarkan nama agar aman
        $aid = fn($name) => Author::where('name', $name)->value('id');

        $books = [
            ['title' => 'Laskar Pelangi',           'author_id' => $aid('Andrea Hirata'),      'genre' => 'Fiksi',         'published_year' => 2005],
            ['title' => 'Perahu Kertas',            'author_id' => $aid('Dewi Lestari'),       'genre' => 'Romansa',       'published_year' => 2009],
            ['title' => 'Harry Potter and the PH',  'author_id' => $aid('J.K. Rowling'),       'genre' => 'Fantasi',       'published_year' => 1997],
            ['title' => 'A Game of Thrones',        'author_id' => $aid('George R.R. Martin'), 'genre' => 'Fantasi',       'published_year' => 1996],
            ['title' => 'Atomic Habits',            'author_id' => $aid('James Clear'),        'genre' => 'Self-Improve',  'published_year' => 2018],
        ];

        foreach ($books as $b) {
            Book::create($b);
        }
    }
}
