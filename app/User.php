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
        'nama', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'level',
    ];

    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }

    const ADMIN_TYPE = 'Admin';
    const USER_TYPE = 'User';

    public function isAdmin()
    {
    return $this->type === self::ADMIN_TYPE;
    }
}
