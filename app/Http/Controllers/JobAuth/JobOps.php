<?php

namespace App\Http\Controllers\JobAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Creator;
use App\User;
use App\Jobs;
use Auth;
use Illuminate\Support\Facades\DB;

class JobOps extends Controller
{
    
    public function index() {
         return view('alljobs');
    }

    
    
    public function accessJob($createdby, $id){
        $crt = Creator::find($createdby);
    $jb = \App\Jobs::find($id);
    return view('jobpage', ['crt' => $crt, 'jb' => $jb]);
    
    } 


    public static function findJobsByCreator(){
        $creatorId = Auth::guard('creator')->user()->id;
        
       
        $jobs = Jobs::where('createdby', $creatorId)
                
               //->orderBy('date_created')
               //->take(10)
               //->get()
                ->simplePaginate(8);
        
        //return response()->json($jobs, 200);
        return view('creatorhome', ['jobs' => $jobs]);
    }
    
    public function findWorkersThatFitAllCreatorJob(){
        $creatorId = Auth::guard('creator')->user()->id;
        
        
        
           $j = Jobs::with('createdby', $creatorId)->orderBy('date_created')->find(2);
           // //select('select * from jobs where createdby = ?', [$creatorId])->get();
           
           
           
           
          $jobSkill1 = $j->title;
           $jobSkill2 = $j->skill2;
           $jobResident = $j->resident;
           $jobResidentLga = $j->residentLga;
           
/**         $workerSkill1 = Worker::where([
    ['skill1', $jobSkill1],
])->orderBy('av_rating')->get();
        
        $workerSkill2 = Worker::where([
   ['skill2', $jobSkill2],
])->orderBy('av_rating')->get();
        
        $workerResident = Worker::where([
    ['resident', $jobResident],
])->orderBy('av_rating')->get();
        
        $workerResidentLga = Worker::where([
    ['residentlga', $jobResidentLga],
   ['skill2', $jobSkill2],
])->orderBy('av_rating')->get();
       
        $workers = Worker::select('select * from workers where skill1 = ? or skill2 = ? or skill3 = ? or resident = ? or residentlga = ?', [$workerSkill1, $workerSkill2, $workerResident, $workerResidentLga]);

     **/   
        //return response()->json($jobs, 200);
      return $j;
    }
    
    public function findJobByLocationSkill($location, $skill1){
      
        
         $jobs = Jobs::where('resident', $location)
                 ->where('skill1', $skill1)->get();
          return response()->json($jobs, 200);
    }
    
    public function makeJobs() {
        return view('searchjobs');
    }
    
    public function executeSearch(Request $request){
        
        //get the query from the get request
       $query = $request->input('squery');
               
        
        //if the users sends empty query, output everything
       if($query === null){
           // $jobs = DB::table('jobs')->simplePaginate(4);
            $jobs = Jobs::simplePaginate(3);
             
       }else{
            //else use the query for search
            $jobs = Jobs::search($query);
        
             

        }
        
        return view('searchjobs', ['jobs' => $jobs]);
        //return response()->json(['jobs' => $jobs]);
        
    }
    
    
    //find jobs that fit worker's skill in dashboard
    public static function jobsByWorkerSkillDashboard() {
       //get the worker's id first
        $workerId = Auth::user()->id;
        
        //query for his/her skills
        
        $worker = User::find($workerId);
        
        //retrieve the skills
        $skill1 = $worker->skill1;
        $skill2 = $worker->skill2;
        $resident = $worker->resident;
        
        
        //query fror the jobs
        $jobs =  Jobs::where('open', 1)->where('skill1', $skill1)
                ->where('resident', $resident)
                ->orWhere('skill2', $skill2)
                ->get();
    
        
        return view('home', ['jobs' => $jobs]);
    }
    
      public function searchJob(Request $request){

    	$state = false;
    	$skillQuery = $request->get('skill');
        $resident = $request->get('resident');

    	if(is_null($skillQuery) && is_null($resident)){
    		$state = true;
    		$jobs = Jobs::where('open', 1)->get();
    		return view('alljobs', ['jobs' => $jobs, 'state' => $state]);
    	}else {
    		$jobs = Jobs::where('open', 1)
                        ->where('skill1', $skillQuery)
    		->orWhere('skill2', $skillQuery)
                        ->orWhere('resident', $resident)
    		->get();
    		if($jobs->count() == 0){
    			$state = true;
    			return view('alljobs', ['jobs' => $jobs, 'state' => $state]);
    		}else{
    			$state = false;
    		return view('alljobs', ['jobs' => $jobs, 'state' => $state]);
    	}
    	}

    	
    }


    
    
    

}