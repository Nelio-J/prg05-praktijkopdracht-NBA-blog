<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableObserver;

class Post extends Model
{
    use HasFactory;
    use Sluggable;


//    public function category(){
//        return $this->belongsTo('');
//    }

    protected $fillable = ['category_id', 'slug', 'title', 'image', 'excerpt', 'content', 'status'];

    protected $with = ['category', 'user'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function sluggableEvent(): string
    {
        /**
         * Default behaviour -- generate slug before model is saved.
         */
//        return SluggableObserver::SAVING;

        /**
         * Optional behaviour -- generate slug after model is saved.
         * This will likely become the new default in the next major release.
         */
        return SluggableObserver::SAVED;
    }
    public function scopeFilter(Builder $query, array $filter): void //A local scope that accepts an array of filters: Post::newQuery()->filter()
    {
        $query->when($filter['search'] ?? false, fn($query, $search) => //?? = null coalescing operator. If the filter array contains search, pass $query & $search. If it doesn't, it gives false
            $query->where(fn($query) => //logical grouping that correctly closes the brackets in query
                $query->where('title', 'like', '%' . $search . '%') //where('title', 'like', '%' . request('search') . '%')
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

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
