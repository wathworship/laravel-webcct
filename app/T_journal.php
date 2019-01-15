<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_journal extends Model
{
       protected $fillable = [
        'idt_journals','journals_name','issue','journals_file','journals_cover','users_iduser',
        't_journalstype_idt_journalstype','created_at','updated_at'
    ];
}
