<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'release_date',
        'available_copies',
    ];

    // Um livro pode ter vários emprestimos
    public function lendings(): HasMany
    {
        return $this->hasMany(Lending::class);
    }
}
