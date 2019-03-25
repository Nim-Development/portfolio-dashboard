<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function images(){
        return $this->hasMany(Image::class);
    }
}
