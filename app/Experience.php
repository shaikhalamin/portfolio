<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

    protected static function boot()
    {
        parent::boot();
        static::saved(function ($model) {
            Profile::cacheUpdate();
        });

        static::updated(function ($model) {
            Profile::cacheUpdate();
        });
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
