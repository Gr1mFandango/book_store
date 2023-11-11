<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 'book_id'
    ];

    public function book(): HasOne
    {
        return $this->hasOne(Book::class);
    }
}
