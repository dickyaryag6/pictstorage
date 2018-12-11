<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\PembayaranReminder;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = 'admin';
    const USER_TYPE = 'User';

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


    public function isAdmin()
    {
    return $this->user_type === self::ADMIN_TYPE;
    }

    //$user->notify(new InvoicePaid($invoice));
}
