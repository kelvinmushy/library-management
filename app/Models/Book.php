<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function userLike(){
        return $this->hasMany('App\Models\UserLikeBook', 'book_id');
    }

    public function userFavourite(){
        return $this->hasMany('App\Models\UserMarkBook', 'book_id');
    }

}
