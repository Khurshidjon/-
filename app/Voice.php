<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
    protected $fillable = [
        'excellent',
        'good',
        'bad',
        'improve_further',
        'client_ip',
    ];
}
