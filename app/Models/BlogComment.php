<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;
    protected $fillable = ['comment','user_id','status','blog_id'];

    protected $hidden = ['updated_at'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function getCreatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('F d, Y h:i a');
    }
}
