<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    protected $table = 'songs';
    protected $fillable = [
        'id',
        'id_type',
        'id_singer',
        'id_country',
        'id_musician',
        'id_album',
        'id_user',
        'name',
        'img',
        'price',
        'file',
        'des',
        'views',
        'bought',
        'copyright',
    ];
}
