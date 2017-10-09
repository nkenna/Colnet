<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class Creator extends Authenticatable
{
    protected $casts = [
   'dod' => 'date'
    ];
    
    protected $fillable = [
        'phone', 'email', 'password', 'firstname', 'middlename', 'lastname', 'dod', 'address',
        'activated', 'resident', 'residentlga',
       'last_location', 'ref_num','image'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function getAge(){
        return $this->dod->diffInYears(Carbon::now());
    }
    
}
