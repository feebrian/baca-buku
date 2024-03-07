<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'writer', 'publisher', 'publication_year', 'synopsis', 'cover', 'slug', 'stock'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
