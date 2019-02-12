<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet-Like extends Model
{
    public function likes()    {
    return $this->belongsToMany('App\User', 'likes');

}
