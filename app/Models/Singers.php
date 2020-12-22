<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Singers extends Model
{
    protected $table = 'singers';
    protected $fillable = [
        'id',
        'id_country',
        'name',
        'des',
        'img',
    ];
}
