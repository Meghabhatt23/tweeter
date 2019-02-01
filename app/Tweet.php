<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public function Comments(){
        return $this->hasOne('App\comments');
    }
}
