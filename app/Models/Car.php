<?php

namespace App\Models;

use App\Models\Gorivo;
use App\Models\Photo;
use App\Models\Pogon;
use App\Models\Stanje;
use App\Models\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
            ],
        ];
    }

    protected $guarded = [];

    public function gorivo()
    {
        return $this->belongsTo(Gorivo::class);
    }

    public function stanje()
    {
        return $this->belongsTo(Stanje::class);
    }

    public function pogon()
    {
        return $this->belongsTo(Pogon::class);
    }

    public function photo()
    {
        return $this->morphMany(Photo::class, 'imageable');
    }

    public function latest_photo()
    {
        return $this->morphOne(Photo::class, 'imageable')->latest('id');
    }

    public function user()
    {
        return $this->belongsTo(Photo::class);
    }
}
