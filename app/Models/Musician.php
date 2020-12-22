<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    protected $table = 'musicians';
    protected $fillable = [
        'id',
        'id_country',
        'name',
        'des',
        'img',
    ];
}
