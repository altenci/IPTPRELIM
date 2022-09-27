<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    public function users() {
        return $this->belongsTo('App\User');
    }

    public function courses() {
        return $this->belongsTo('App\Course');
    }
}
