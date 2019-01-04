<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_contact extends Model
{
    protected $fillable=[
        'contact_name',
        'contact_tel',
        'contact_address',
        'contact_fax'
    ];

    protected $table= 't_contact';
}
