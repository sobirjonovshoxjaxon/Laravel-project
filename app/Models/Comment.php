<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['body','user_id','post_id'];

    //Connect User Model 
    public function user(){
        return $this->belongsTo(User::class);
    }
}
