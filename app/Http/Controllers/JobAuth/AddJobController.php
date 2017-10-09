<?php

namespace App\Http\Controllers\JobAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Http\Controllers\JobAuth\JobOps;



class AddJobController extends Controller
{

    public function index(){
        return view('alljobs');
    }
    
 
    
    public function add(Request $request){
        
        $job = new Jobs;
        $creatorId = Auth::guard('creator')->user()->id;
        
        $job->title = $request->input('title');
        $job->disc = $request->input('disc');
        $job->createdby = $creatorId;
        $job->date_created = Carbon::now();
        $job->resident = $request->input('resident');
        $job->residentlga = $request->input('residentlga');
        $job->skill1 = $request->input('skill1');
        $job->skill2 = $request->input('skill2');
        $job->ref_num = $creatorId.rand(0, 999999);
        $job->open = true;
        $job->save();
        
        return back();
        
      //return redirect('/home/creator');
    }
    
    public function update(Request $request)
    {
    	
        
    }

}
