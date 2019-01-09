<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bit()
    {
        return $this->belongsTo(Bit::class);
    }
}
