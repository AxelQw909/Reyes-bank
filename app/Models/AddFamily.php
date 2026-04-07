<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddFamily extends Model
{
    protected $table = 'addfamilys';

    protected $fillable = [
        'nickname',
        'vk',
        'tg',
        'famyli',
    ];
}
