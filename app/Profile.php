<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class)->orderBy('date_from', 'desc');
    }
}
