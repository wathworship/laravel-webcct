<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_article extends Model
{
    
    protected $fillable=[
        'idt_article', 
        'article_name',
        'article_detail',
        'article_file',
        'users_iduser','
        t_articletype_idt_articletype',
        'status',
        'created_at',
        'updated_at'
    ];
}
