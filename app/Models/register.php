<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class register extends Authenticatable
{
    protected $table = 'user_account';

    protected $primaryKey = 'account_id';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'role'
    ];
    

    protected $hidden = [
        'password',
    ];
}
