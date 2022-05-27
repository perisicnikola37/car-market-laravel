<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    use HasFactory;

    protected $guarded = [];

    public function gorivo() {
        return $this->belongsTo('App\Models\Gorivo');
    }

    public function stanje() {
        return $this->belongsTo('App\Models\Stanje');
    }

    public function pogon() {
        return $this->belongsTo('App\Models\Pogon');
    }

    public function photo() {
        return $this->belongsTo('App\Models\Photo');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

   
    


}


