<?php

namespace App\Models;

class Author
{
    // 5 data contoh
    private static array $data = [
        ['id' => 1, 'name' => 'Andrea Hirata', 'country' => 'Indonesia'],
        ['id' => 2, 'name' => 'Dewi Lestari', 'country' => 'Indonesia'],
        ['id' => 3, 'name' => 'J.K. Rowling', 'country' => 'UK'],
        ['id' => 4, 'name' => 'George R.R. Martin', 'country' => 'USA'],
        ['id' => 5, 'name' => 'James Clear', 'country' => 'USA'],
    ];

    public static function all(): array
    {
        return self::$data;
    }
}
