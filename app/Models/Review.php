<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'text', 'rate', 'book_id', 'user_id'
    ];

    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
