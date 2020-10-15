<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function experiences()
    {
        return $this->hasMany('App\Experience')->orderBy('date_from', 'desc');
    }
}
