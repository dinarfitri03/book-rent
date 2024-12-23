<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $fillable = [
        'book_code', 'title', 'cover', 'slug'
    ];

    public function sluggable(): array{
        return [
            'slug'=> [
                'source'    => 'title'
            ]
        ];
    }

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
    }
}
