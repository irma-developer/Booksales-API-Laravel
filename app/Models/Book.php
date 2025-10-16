<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany; // ← tambah ini

class Book extends Model
{
    protected $fillable = ['title','author_id','genre','published_year','price','description'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    // ← Tambahkan relasi many-to-many ke Genre
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class); // pivot: book_genre (sudah kamu buat)
    }
}
