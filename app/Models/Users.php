<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'id',
        'name',
        'img',
        'username',
        'password',
        'email',
        'qty_buy',
        'total_money',
        'type_customer',
        'phone',
    ];
}
