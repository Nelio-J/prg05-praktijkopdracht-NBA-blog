<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;

//    public function category(){
//        return $this->belongsTo('');
//    }

    protected $fillable = ['category_id', 'slug', 'title', 'image', 'excerpt', 'content'];

    protected $with = ['category', 'user'];

    public function scopeFilter(Builder $query, array $filter): void //A local scope for the filter: Post::newQuery()->filter()
    {
        $query->when($filter['search'] ?? false, fn($query, $search) => //if the filter array contains search
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('excerpt', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%')
            )
        );

        $query->when($filter['category'] ?? false, fn($query, $category) => //if the filter array contains category
            $query->whereHas('category', fn ($query) => //find all categories
            $query->where('slug', $category)) //find all categories WHERE slug matches the request
        );

        $query->when($filter['author'] ?? false, fn($query, $author) => //if the filter array contains category
        $query->whereHas('user', fn ($query) => //find all authors
        $query->where('username', $author)) //find all authors WHERE username matches the request
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
