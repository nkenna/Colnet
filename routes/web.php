<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Validator as vv;
use Illuminate\Http\Request;
use App\User;
use App\Creator;
use App\Mail\WorkerRegistered;



Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home/creator', function(){
    return view('creatorhome')->middleware('auth');
});


Route::get('/edit/worker', function (){
    return view('editworker');
});

Route::post('/upload/pic', function(Request $request){
    $userName = Auth::user()->firstname;
        $userId = Auth::user()->id;
       $img = $request->input('img');
       
        validator([
          $img  => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
       ]);
       
       //rename image
       $imgName = $userName.rand(0,10000).'.'.$request->img->getClientOriginalExtension();
       $request->img->move(public_path('/img/workers'), $imgName);
       $worker = User::find($userId);
       
       $worker->image = 'http://localhost:8000/img/workers/'.$imgName;
       $worker->save();
       
       return back()->with('image', $imgName);
})->middleware('auth');

Route::post('/edit/skill', function(Request $request){
    $skill1 = $request->input('skill1');
    $skill2 = $request->input('skill2');
    $userId = Auth::user()->id;
    
    $worker = User::find($userId);
    
    $worker->skill1 = $skill1;
    $worker->skill2 = $skill2;
    $worker->save();
    
    
    return back();
    
});

//workers operations
Route::get('/all/workers', 'UserController@index');

Route::get('/all/workers', 'UserController@searchWorker');


//register creator
Route::get('/register/creator', 'CreatorAuth\RegisterController@showRegistrationForm');
Route::post('/register/creator', 'CreatorAuth\RegisterController@register');

//login and logoutcreator
Route::post('/login/creator', 'CreatorAuth\LoginController@login');
Route::post('/logout/creator', 'CreatorAuth\LoginController@logout');

//add job and jobs operations
Route::post('/job/add/new', 'JobAuth\AddJobController@add');
Route::get('/home/creator', 'JobAuth\JobOps@findJobsByCreator')->middleware('auth');
Route::get('/view/job/{createdby}/{id}', 'JobAuth\JobOps@accessJob');
Route::get('/home', 'JobAuth\JobOps@jobsByWorkerSkillDashboard')->name('home')->middleware('auth');
Route::get('/all/jobs', 'JobAuth\JobOps@index');
Route::get('/all/jobs', 'JobAuth\JobOps@searchJob');



//admin routes
Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/add', function () {
    return view('admin.add');
})->middleware('admin');

Route::get('/admin/front', function () {
    return view('admin.front');
})->middleware('admin');

Route::post('/admin/add', 'Admin\AdminController@register');
Route::post('/admin/login', 'Admin\AdminController@login');
Route::post('/admin/logout', 'CreatorAuth\LoginController@logout');

Route::get('/admin/workers', 'Admin\AdminController@allWorkers')->middleware('auth');
Route::get('/admin/worker/{id}', 'Admin\AdminController@aWorker')->middleware('auth');

Route::get('/admin/creators', 'Admin\AdminController@allCreators');
Route::get('/admin/creator/{id}', 'Admin\AdminController@aCreator');

Route::get('/admin/admins', 'Admin\AdminController@allAdmins');
Route::get('/admin/admin/{id}', 'Admin\AdminController@admin');

Route::get('/admin/jobs', 'Admin\AdminController@allJobs');
Route::get('/admin/job/{id}', 'Admin\AdminController@aJob');


//mails
Route::get('/mailable', function () {
    $user = App\User::find(2);
            Mail::to($user)->send(new WorkerRegistered($user));

    return new App\Mail\WorkerRegistered($user);
});



