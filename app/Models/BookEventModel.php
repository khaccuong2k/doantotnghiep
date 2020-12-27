<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class BookEventModel extends Model
{
    protected $table = 'orderevent';
    protected $fillable = [
        'id',
        'id_user',
        'id_event'
    ];
}
