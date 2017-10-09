<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ColNET - home</title>

        <script src="/js/jquery-3.2.1.min.js"></script>
         <script src="/js/nigstate.js"></script>
        <script src="/js/openmodal.js"></script>
        <link href="/css/bulma.css" rel="stylesheet" type="text/css">
        <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
        
     
    </head>
    <body>
       @include('layouts.header')
       
       <div class="container">
           <section class="section">
               <div class="columns">
                   <div class="column is-info is-5">
                       <div class="box">
                           <article class="media">
                               <figure class="media-left is-128x128">
                                   <img width="128" height="128" src="{{Auth::guard('creator')->user()->image}}" alt="Image"> 
                               </figure>
                               
                               <div class="media-content">
                                   <div class="content">
                                       <p>
                                           <strong>{{Auth::guard('creator')->user()->firstname.' '.Auth::guard('creator')->user()->middlename.' '.Auth::guard('creator')->user()->lastname}}</strong>  <small>  {{Auth::guard('creator')->user()->getAge()}}yrs</small>
                                           <br>
                                           
                                       </p>
                                       <a class="button is-success" href="{{ url('/edit/worker') }}">Edit profile</a>
                                   </div>
                               </div>
                           </article>
                       </div>
                   </div>
                   
                   <div class="column is-info">
                          <div class="box">
                           <article class="media">
                               
                               
                               <div class="media-content">
                                   <div class="content">
                                       <p>
                                           Resident: {{Auth::guard('creator')->user()->resident}}
                                           <br>
                                           Area: {{Auth::guard('creator')->user()->residentlga}}
                                           <br>
                                           
                                           Jobs Added: 45
                                           
                                       </p>
                                       <button class="button is-success smodal" name="smodal" type="button">Add a Job</button>
          
                                   </div>
                               </div>
                           </article>
                       </div>
                   </div>
                   
                   <div class="column is-info">
                       
                   </div>
               </div>
           </section>
           
           
           
           <div class="modal" name="m">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Add a Job</p>
      <button class="delete hmodal" aria-label="close"></button>
    </header>
      <form role="form" method="post" action="/job/add/new" >
             {{ csrf_field() }}
    <section class="modal-card-body section">
      <!-- Content ... -->
      
       <!--add job form starts-->
                <p class="title"></p>
              
                
                    
                    <div class="field{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="label">Job Title</label>
                        <div class="control">
                        <input type="text" class="input" name="title" id="title" placeholder="Enter Job Title">
                        </div>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <p class="help is-danger">{{ $errors->first('title') }}</p>
                            </span>
                        @endif
                    </div>
                    
                    <div class="field{{ $errors->has('disc') ? ' has-error' : '' }}">
                        <label for="disc" class="label">Job Description</label>
                        <div class="control">
                        <textarea cols="50" rows="5" class="textarea" name="disc" id="disc" placeholder="Enter Job Description. Please be detailed."></textarea>
                        </div>
                        @if ($errors->has('disc'))
                            <span class="help-block">
                                <p class="help is-danger">{{ $errors->first('disc') }}</p>
                            </span>
                        @endif
                    </div>
                    
                   

                    
                 
  <div class="field{{ $errors->has('resident') ? ' has-error' : '' }}">
      <label for="resident" class="label">Resident State</label>
      <p class="is-success help">Select your State of resident or the State where you want your Job Search to be tailored to.</p>
      
      <div class="control has-icons-left">
          <span class="select">
            <select id="resident" name="resident">
                  <option value="" selected="selected" onchange="showLGA(this.value)">Select State of Resident</option>
 
                  <option value='Abia'>Abia</option>
                  <option value='Adamawa'>Adamawa</option>
                  <option value='AkwaIbom'>AkwaIbom</option>
                  <option value='Anambra'>Anambra</option>
                  <option value='Bauchi'>Bauchi</option>
                  <option value='Bayelsa'>Bayelsa</option>
                  <option value='Benue'>Benue</option>
                  <option value='Borno'>Borno</option>
                  <option value='CrossRivers'>CrossRivers</option>
                  <option value='Delta'>Delta</option>
                  <option value='Ebonyi'>Ebonyi</option>
                  <option value='Edo'>Edo</option>
                  <option value='Ekiti'>Ekiti</option>
                  <option value='Enugu'>Enugu</option>
                  <option value='FCT'>FCT</option>
                  <option value='Gombe'>Gombe</option>
                  <option value='Imo'>Imo</option>
                  <option value='Jigawa'>Jigawa</option>
                  <option value='Kaduna'>Kaduna</option>
                  <option value='Kano'>Kano</option>
                  <option value='Katsina'>Katsina</option>
                  <option value='Kebbi'>Kebbi</option>
                  <option value='Kogi'>Kogi</option>
                  <option value='Kwara'>Kwara</option>
                  <option value='Lagos'>Lagos</option>
                  <option value='Nasarawa'>Nasarawa</option>
                  <option value='Niger'>Niger</option>
                  <option value='Ogun'>Ogun</option>
                  <option value='Ondo'>Ondo</option>
                  <option value='Osun'>Osun</option>
                  <option value='Oyo'>Oyo</option>
                  <option value='Plateau'>Plateau</option>
                  <option value='Rivers'>Rivers</option>
                  <option value='Sokoto'>Sokoto</option>
                  <option value='Taraba'>Taraba</option>
                  <option value='Yobe'>Yobe</option>
                  <option value='Zamfara'>Zamafara</option>


            </select>
           </span>
           </span>
           <span class="icon is-small is-left">
                <i class="fa fa-globe"></i>
           </span>
      </div>
      @if ($errors->has('resident'))
            <span class="help-block">
                <p class="help is-danger">{{ $errors->first('resident') }}</p>
            </span>
      @endif
    </div>

    <div class="field{{ $errors->has('residentlga') ? ' has-error' : '' }}">
        <label for="residentlga" class="label">Resident LGA</label>
         <p class="is-success help">Select the Local Government or area you are residing in.</p>
        <div class="control">
          <span class="select">
       
        <select id="residentlga" name="residentlga">
                              
            <option value="">Select LGA of Resident</option>
        </select>
          </span>
        </div>
    </div>

  <div class="field{{ $errors->has('skill1') ? ' has-error' : '' }}">
      <label for="skill1" class="label">Primary Skill</label>
    <p class="is-success help">Select a Primary skill from the list which you actually possess. Your Job Search will be mainly with this Skill.</p>
  <div class="control">
          <span class="select">
       
    <select name="skill1" >
  
  <option value="">Select one option</option>
  <option value="carpenter">Carpenter</option>
  <option value="plumber">Plumber</option>
  <option value="painter">Painter</option>
  <option value="bricklayer">Bricklayer</option>
  <option value="nanny">Nanny</option>
  <option value="home tutor">Home Tutor</option>
  <option value="cleaner">Cleaner</option>
  <option value="mechanic">Car Mechanic</option>
  <option value="electrician">Electrician</option>
  
</select>
          </span>
  </div>
@if ($errors->has('skill1'))
    <span class="help-block">
        <p class="help is-danger">{{ $errors->first('skill1') }}</p>
    </span>
@endif
  </div>
  

  <div class="field{{ $errors->has('skill2') ? ' has-error' : '' }}">
      
      <label for="skill2" class="label">Secondary Skill</label>
    <p class="help is-success">Select a secondary skill from the list which you actually possess.</p>
    
      <div class="control">
          <span class="select">
       
   <select name="skill2" class="form-control">
<option value="">Select one option</option>
  <option value="carpenter">Carpenter</option>
  <option value="plumber">Plumber</option>
  <option value="painter">Painter</option>
  <option value="bricklayer">Bricklayer</option>
  <option value="nanny">Nanny</option>
  <option value="home tutor">Home Tutor</option>
  <option value="cleaner">Cleaner</option>
  <option value="mechanic">Car Mechanic</option>
  <option value="electrician">Electrician</option>
</select>
          </span>
      </div>
@if ($errors->has('skill2'))
        <span class="help-block">
            <p class="help is-danger">{{ $errors->first('skill2') }}</p>
        </span>
@endif
  </div>
  
                    
          
                <!--add job form ands-->
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success" type="submit">Add Job</button>
      <button class="button" type="reset">Cancel</button>
   
    </footer>
       </form>
  </div>
</div>
           
           <section>
               <div class="columns is-multiline">
               @foreach($jobs as $job)
                 <div class="column is-4-desktop is-4 is-4-fullhd is-12-mobile is-4-tablet
                      is-4-touch is-4-widescreen">
                <div class="card content">
                               <header class="card-header">
    <p class="card-header-title text-center">
      {{{$job->title}}} 
    </p>
    
  </header>
                   
                    <div class="card-content">
                        <h4 class="subtitle">Job Details:</h4>
                        <p>State: {{$job->resident}}
                            <br>
                        Location: {{$job->residentlga}}
                        <br>
                        Required Skill1: {{$job->skill1}}
                            <br>
                       Required Skill2: {{$job->skill2}}
                            <br>
                        Date Added: {{$job->date_created}}
                        </p>
                        <footer class="card-footer">
                            <a type="button" href="{{url('/view/job/'.$job->createdby.'/'.$job->id)}}" class="button is-danger" >Edit Job</a>
                        </footer>
                    </div>
                  
                </div>
             
             
            </div>
               @endforeach
               </div>
               {{$jobs->links()}}
           </section>
   

           
       
    </body>
</html>
