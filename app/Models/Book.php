<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $fillable = ['title','author_id','genre','published_year','price','description'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
