<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function project(){
        $this->belongsTo(Project::class);
    }
}
