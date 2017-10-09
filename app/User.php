<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;


class User extends Authenticatable
{
    use Notifiable;
    
    protected $casts = [
   'dod' => 'date'
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
       protected $fillable = [
        'phone', 'email', 'password', 'firstname', 
           'middlename', 'lastname', 'dod', 'address',
        'activated', 'rating', 'numofrating', 'resident', 'residentlga',
       'lastlocation', 'skill1', 'skill2', 'ref_num','image'
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    

    public function getAge(){
        return $this->dod->diffInYears(Carbon::now());
    }
    
    public function getRating(){
        return intval($this->av_rating);
    }
    
    public function getNumRating(){
        return intval($this->num_rating);
    }
    
    public function postUploadImage(Request $request){
       
   }


}
