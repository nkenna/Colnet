<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ColNET - home</title>

        
        <link href="/css/bulma.css" rel="stylesheet" type="text/css">
        <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">

    </head>
    <body>
       @include('layouts.header')
       
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                   
                      <section class="section">
                    <figure class="image is-128x128">
                        <img src="{{Auth::user()->image}}" 
                           alt="...">
                    </figure>
                         </section>
                   
                    <section class="section">
                         
                       
                        
                        <h2 class="subtitle">Edit Profile Picture</h2>
                        
                        
        <form class="" method="POST" action="{{ url('/upload/pic') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        
                        <div class="field">
  <div class="file is-danger has-name is-boxed control">
   
      <input class="input" type="file" name="img" required>
     
  </div>
                            
                            <div class="field">
           <div class="control">
        <button type="submit" class="button is-success">Upload</button>
           </div>
       </div>
</div>

                        
        </form>
                    </section>
                </div>
                
                <div class="column is-6">
                    
              <section class="section">
                  <p>Primary Skill: {{Auth::user()->skill1}}</p>
                  <p>Secondary Skill: {{Auth::user()->skill2}}</p>
               <form class="" method="POST" action="{{ url('/edit/skill') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        
           
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
                        
                        <div class="field">
           <div class="control">
        <button type="submit" class="button is-success">Save</button>
           </div>
       </div>
                        
                        </form>
  
                    </section>
                    
                    
                </div>
                
                
               <div class="column is-6">
                    
                    <section class="section">
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
  
                    </section>
                    
                    
                </div> 
                
            </div>
        </div>
       
    </body>
</html>
