<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;


class Admin extends Authenticatable
{
	use Notifiable;
	
    protected $fillable = [
        'email', 'password', 'name', 'level', 'ref_num'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
