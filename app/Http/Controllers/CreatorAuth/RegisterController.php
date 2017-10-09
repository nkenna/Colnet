<?php

namespace App\Http\Controllers\CreatorAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Creator;
use Auth;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
      protected $redirectPath = '/home/creator';
      protected $code;


      public function __construct()
    {
        $this->middleware('guest');
    }


    public function showRegistrationForm()
    {
       return view('creator/register');
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
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:creators',
            'password' => 'required|string|min:6|confirmed',
            'firstname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'dod' => 'required|date|max:255',
            'address' => 'required|string|max:255',
            'resident' => 'required|string|max:255',
            'residentlga' => 'required|string|max:255',


        ]);
    }

protected function create(array $data)
    {
    
    $this->code = $data['phone'].rand(0, 9999);
         return Creator::create([
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'dod' => $data['dod'],
            'address' => $data['address'],
            'resident' => $data['resident'],
            'residentlga' => $data['residentlga'],
            'activated' => '0',
            'ref_num' => $this->code 
        ]);
    }

     protected function guard()
    {
        return Auth::guard('creator');
    }
}
