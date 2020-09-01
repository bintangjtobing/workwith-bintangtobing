<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectdbs extends Model
{
    protected $table = 'projectdbs';
    protected $fillable = [
        'project_name',
        'category',
        'link',
        'file',
        'count',
    ];
}
