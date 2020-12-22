<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $table = 'type';
    protected $fillable = [
        'id',
        'name',
        'des',
        'img',
    ];
}
