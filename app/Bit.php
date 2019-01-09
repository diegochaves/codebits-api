<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bit extends Model
{
    protected $table = 'bits';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(reply::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
