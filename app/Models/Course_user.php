<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_user extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'course_id',
    //     'user_id',
    //     'paid',
    // ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
