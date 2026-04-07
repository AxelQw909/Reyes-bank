<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Reye extends Model
{
    protected $table = 'reyes';

    protected $fillable = [
        'nickname',
        'lvl',
        'phone',
        'schet',
        'ts1',
        'ts2',
        'ts3',
        'ts4',
        'ts5',
        'home1',
        'home2',
    ];
}
