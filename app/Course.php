<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function trainees() {
        return $this->hasMany('App\Trainee');
    }

    public function trainors() {
        return $this->belongsTo('App\Trainer');
    }
}
