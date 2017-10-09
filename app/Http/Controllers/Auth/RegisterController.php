<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\WorkerRegistered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $code;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());
        
        

        $this->guard()->login($user);
        
        Mail::to($user)->send(new WorkerRegistered($user));

        return redirect($this->redirectPath);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'firstname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'dod' => 'required|date|max:255',
            'address' => 'required|string|max:255',
            'resident' => 'required|string|max:255',
            'residentlga' => 'required|string|max:255',
            'skill1' => 'required|string|max:255',
            'skill2' => 'required|string|max:255',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $this->code = $data['phone'].rand(2,99999);
        
        return User::create([
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'dod' => $data['dod'],
            'address' => $data['address'],
            'resident' => $data['resident'],
            'residentlga' => $data['residentlga'],
            'skill1' => $data['skill1'],
            'skill2' => $data['skill2'],
            'ref_num' => $this->code,
             'activated' => FALSE

        ]);
    }
   
}
