<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    public function organ()
    {
        return $this->belongsTo(Organ::class);
    }
    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}
