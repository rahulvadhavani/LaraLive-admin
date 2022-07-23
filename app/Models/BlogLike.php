<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogLike extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','status','blog_id'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
