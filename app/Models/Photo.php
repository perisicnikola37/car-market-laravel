<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    
    use HasFactory;

    protected $guarded = [];

    protected $path = '/storage/images/';

    public function getFileAttribute($file) {

        return $this->path . $file;

    }

    public function imageable() {
        return $this->morphTo();
    }


}
