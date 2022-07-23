<?php

namespace App\Models;

use App\Http\Livewire\Admin\Blog\Blogs;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\ResetPasswordNotification;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $appends = array('fullname');

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
   
    protected $fillable = [
        'first_name',
        'email',
        'password',
        'last_name',
        'user_name',
        'image',
        'phone',
        'name',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImageAttribute($val){
        return $val != null ? app()->environment('local') ? url('uploads/'.$val) : url('public/uploads/'.$val) : url('assets/images/user.png');
    }
    public function getFullnameAttribute($val){
       return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }

    public function blog(){
        return $this->belongsTo(Blog::class,'id','blog_id');
    }
}
