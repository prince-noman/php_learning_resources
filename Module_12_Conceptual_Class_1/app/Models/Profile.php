<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'address',
        'phone_number',
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}