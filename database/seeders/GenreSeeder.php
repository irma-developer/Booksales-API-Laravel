<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        foreach (['Fiksi', 'Nonfiksi', 'Fantasi', 'Romansa', 'Self-Improvement'] as $g) {
            \App\Models\Genre::firstOrCreate(['name' => $g]);   // <-- array assoc
        }
    }
}
