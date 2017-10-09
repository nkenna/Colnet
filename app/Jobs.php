<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Creator;
use Carbon\Carbon;

class Jobs extends Model
{
    protected $casts = [
   'created_at' => 'date'
    ];

    public function creator(){
        return $this->belongsTo(Creator::class);
    }

    public function getDays(){
        return $this->created_at->diffinDays(Carbon::now());
    }
    
    
}
