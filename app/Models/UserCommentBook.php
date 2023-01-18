<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCommentBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'user_comment',
       
    ];
}
