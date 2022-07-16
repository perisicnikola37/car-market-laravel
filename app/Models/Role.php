<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//!
use App\Models\Car;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function users() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }






}
