<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_news extends Model
{
    protected $fillable = [
        'title', 'description'
    ];
}
