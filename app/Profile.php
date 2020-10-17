<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::saved(function ($model) {
            self::cacheUpdate();
        });

        static::updated(function ($model) {
            self::cacheUpdate();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class)->orderBy('date_from', 'desc');
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public static function cacheUpdate()
    {
        cache()->forget('profile');
        cache()->remember('profile', 60 * 60 * 24, function () {
            return self::where('email', 'alamin.cse15@gmail.com')->with(['experiences', 'skills'])->first();
        });
    }
}
