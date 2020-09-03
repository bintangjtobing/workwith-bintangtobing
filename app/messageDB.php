<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messageDB extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'message_id';
    protected $fillable = [
        'nama', 'email', 'pesan', 'project_type'
    ];
}
