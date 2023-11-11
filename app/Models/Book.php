<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'page_number', 'annotation', 'author_id'
    ];

    public function author(): HasOne
    {
        return $this->hasOne(Author::class);
    }

    public function publisher(): HasOne
    {
        return $this->hasOne(Publisher::class);
    }

    public function image(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function review(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
