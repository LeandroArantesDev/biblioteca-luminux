<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lending extends Model
{
    protected $fillable = [
        'book_id',
        'user_id',
        'lend_date',
        'devolution_date',
        'status',
    ];

    // Um emprestimo pertence a um livro
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    // Um emprestimo pertence a um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
