<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Optional: Specify table name if it doesn't match the plural of the model name
    protected $table = 'comments';

    // Define fillable fields
    protected $fillable = ['post_id', 'user_name', 'content'];

    // Relationships
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
