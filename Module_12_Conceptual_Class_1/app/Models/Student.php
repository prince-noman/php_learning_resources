<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class,);
    }
}