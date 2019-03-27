<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function links(){
        return $this->hasMany(Link::class);
    }
}
