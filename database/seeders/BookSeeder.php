<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $aid = fn($name) => \App\Models\Author::where('name', $name)->value('id');

        $books = [
            ['title' => 'Laskar Pelangi',          'author_id' => $aid('Andrea Hirata'),     'published_year' => 2005, 'price' => 95000],
            ['title' => 'Perahu Kertas',           'author_id' => $aid('Dewi Lestari'),      'published_year' => 2009, 'price' => 85000],
            ['title' => 'Harry Potter and the PH', 'author_id' => $aid('J.K. Rowling'),      'published_year' => 1997, 'price' => 120000],
            ['title' => 'A Game of Thrones',       'author_id' => $aid('George R.R. Martin'), 'published_year' => 1996, 'price' => 130000],
            ['title' => 'Atomic Habits',           'author_id' => $aid('James Clear'),       'published_year' => 2018, 'price' => 110000],
        ];

        foreach ($books as $b) {
            $book = \App\Models\Book::create($b);
            // attach genre contoh
            $book->genres()->syncWithoutDetaching(
                \App\Models\Genre::whereIn('name', ['Fiksi', 'Fantasi', 'Self-Improvement'])->pluck('id')
            );
        }
    }
}
