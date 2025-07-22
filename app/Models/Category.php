<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category','slug','user_id'];

    //Connect Post Model 
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
