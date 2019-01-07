<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_event extends Model
{
    protected $table = 't_event';
    protected $fillable = [
        'event_name',
        'date_start',
        'date_end'
      ];
}
