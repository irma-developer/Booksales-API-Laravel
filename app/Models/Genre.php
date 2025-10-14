<?php

namespace App\Models;

class Genre
{
    // 5 data contoh
    private static array $data = [
        ['id' => 1, 'name' => 'Fiksi'],
        ['id' => 2, 'name' => 'Nonfiksi'],
        ['id' => 3, 'name' => 'Fantasi'],
        ['id' => 4, 'name' => 'Romansa'],
        ['id' => 5, 'name' => 'Self-Improvement'],
    ];

    public static function all(): array
    {
        return self::$data;
    }
}
