<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Car extends Model
{

    use HasFactory;
    
    use Sluggable;
    use SluggableScopeHelpers;  

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['proizvodjac', 'model'],
                'onUpdate' => true,
            ]
        ];
    }

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


