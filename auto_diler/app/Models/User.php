<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//!
use App\Models\Car;
use App\Models\Role;
use App\Models\Stanje;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $guarded = [];

    // public function cars() {
    //     return $this->belongsTo('App\Models\Car');
    // }

   
    public function roles()
    {
        return $this->belongsTo('App\Models\Role', 'role_id');
    }

    public function cars() {
        return $this->hasMany('App\Models\Car', 'user_id');
    }


//    public function isGuest() {

//     // Zašto baš '$this->role'
//     // Jer imam role() relationship

//     if ($this->user->name == "Administrator") {
//         return true;
//     } else {
//         return false;
//     }

//     }
   




















    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
