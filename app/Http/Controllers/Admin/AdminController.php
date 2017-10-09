<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\User;
use App\Creator;
use App\Jobs;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class AdminController extends Controller
{
    
      protected $redirectPath = '/admin/front';
      protected $code;
      
       protected $redirectTo = '/admin/front';


   use AuthenticatesUsers;

    



      public function __construct()
    {
        $this->middleware('guest');
    }
   
     public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $creator = $this->create($request->all());

        $this->guard()->login($creator);

        return redirect($this->redirectPath);
    }
    
     protected function validator(array $data)
    {
         return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
            'name' => 'required|string|max:255',
            'level' => 'required|integer|max:255',

        ]);
    }
    
    protected function create(array $data)
    {
    
    $this->code = rand(1000, 9999).'A'.$data['level'];
         return Admin::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'name' => $data['name'],
            'level' => $data['level'],
            'ref_num' => $this->code 
        ]);
    }
    
    
    public function allWorkers() {
        $users = User::all();
        
        return view('admin.adminworkers', ['users' => $users]);
    }
    
    public function aWorker($id){
        $user = User::find($id);
   
    return view('admin.aworker', ['user' => $user]);
    
    }
    
     public function allCreators() {
        $users = Creator::all();
        
        return view('admin.admincreators', ['users' => $users]);
    }
    
    public function aCreator($id){
        $user = Creator::find($id);
   
    return view('admin.acreator', ['user' => $user]);
    
    }
    
    public function allAdmins() {
        $users = Admin::all();
        
        return view('admin.admins', ['users' => $users]);
    }
    
    public function admin($id){
        $user = Admin::find($id);
   
    return view('admin.admin', ['user' => $user]);
    
    }
    
     public function allJobs() {
        $users = Jobs::all();
        
        return view('admin.adminjobs', ['users' => $users]);
    }
    
    public function aJob($id){
        $user = Jobs::find($id);
        
        //find job creator
        $crt = Creator::find($user->createdby);
   
    return view('admin.ajobs', ['user' => $user, 'crt' => $crt]);
    
    }
    
     protected function guard()
    {
        return Auth::guard('admin');
    }
    
    
}
