<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
// public function followers()
// {
//     return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id')->withTimestamps();
// }
//
// /**
//  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
//  */
// public function followings()
// {
//     return $this->belongsToMany(User::class, 'followers', 'user_id', 'user_id')->withTimestamps();
// }

}
