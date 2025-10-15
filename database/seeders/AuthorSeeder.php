<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['name' => 'Andrea Hirata',        'country' => 'Indonesia'],
            ['name' => 'Dewi Lestari',         'country' => 'Indonesia'],
            ['name' => 'J.K. Rowling',         'country' => 'UK'],
            ['name' => 'George R.R. Martin',   'country' => 'USA'],
            ['name' => 'James Clear',          'country' => 'USA'],
        ];
        foreach ($authors as $a) {
            Author::create($a);
        }
    }
}
