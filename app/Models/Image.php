<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property string $url
 * @property int $id
 */
class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url'
    ];

    public function book(): BelongsTo
    {
        return $this->BelongsTo(Book::class);
    }
}
