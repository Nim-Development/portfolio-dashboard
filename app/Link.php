<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function project(){
        $this->belongsTo(App\Project::class);
    }
}
