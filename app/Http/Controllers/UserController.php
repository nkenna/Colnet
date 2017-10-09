<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $state = false;
        return view('allworkers', ['state' => $state]);
    }

    

    public function searchWorker(Request $request){

    	$state = false;
    	$skillQuery = $request->get('skill');
        $resident = $request->get('resident');

    	if(is_null($skillQuery) && is_null($resident)){
    		//$state = true;
    		$users = User::all();
    		return view('allworkers', ['users' => $users, 'state' => $state]);
    	}else {
    		$users = User::where('skill1', $skillQuery)
    		->orWhere('skill2', $skillQuery)
                        ->orWhere('resident', $resident)
    		->get();
    		if($users->count() == 0){
    			$state = true;
    			return view('allworkers', ['users' => $users, 'state' => $state]);
    		}else{
    			$state = false;
    		return view('allworkers', ['users' => $users, 'state' => $state]);
    	}
    	}

    	
    }
}
