<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Optional: Specify table name if it doesn't match the plural of the model name
    protected $table = 'tags';

    // Define fillable fields
    protected $fillable = ['name'];

    // Relationships
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tags');
    }
}
