<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    protected $casts = [
        'label' => 'array',
    ];
}
