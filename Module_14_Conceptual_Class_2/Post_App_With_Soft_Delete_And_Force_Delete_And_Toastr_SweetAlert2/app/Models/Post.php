<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDeletes;


    protected  $fillable = [
        'title',
        'description',
        'category',
        'tags',
        'status',
        'featured_image'
    ];

    protected $casts = [
        'tags' => 'array'
    ];
    
}