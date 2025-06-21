<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'short_content',
        'content',
        'slug',
        'user_id',
        'category_id',
        'is_special',
        'view',
    ];

    //Connect User Model
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Connect Category Model
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Connect Comment Model
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //Connect Tag Model 
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
