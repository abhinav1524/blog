<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Category;
class Post extends Model
{
    use HasFactory;

    // Optional: Specify table name if it doesn't match the plural of the model name
    protected $table = 'posts';

    // Define fillable fields
    protected $fillable = ['title', 'content', 'category_id'];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public static function generateSlug($title)
{
    return Str::slug($title, '-');
}

}
