<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $casts = [
        'Year' => 'Int',
        'Model' => 'String',
    ];
}
