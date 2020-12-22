<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countrys extends Model
{
    protected $table = 'countrys';
    protected $fillable = [
        'id',
        'name',
        'des',
        'img',
    ];
}
