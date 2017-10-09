<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ColNET</title>
        
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/nigstate.js"></script>
        <link href="/css/bulma.css" rel="stylesheet" type="text/css">
        <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        @include('layouts.header')
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-12-mobile is-offset-3">
                    <section class="section">
          

<form role="form" method="post" action="/register/creator" >
          {{ csrf_field() }}

    <div class="field{{ $errors->has('phone') ? ' has-error' : '' }}">
        <label for="phone" class="label">Phone</label>
        <div class="control has-icons-left">
            <input type="tel" class="input"  name="phone" id="email" placeholder="Phone number">
            <span class="icon is-small is-left is-success">
                <i class="fa fa-phone "></i>
            </span>
        </div>
        <p class="help is-success">Enter a valid Phone/Mobile number. You might be contacted through it.</p>
        @if ($errors->has('phone'))
            <span class="help-block">
                <p class="help is-danger">{{ $errors->first('phone') }}</p>
            </span>
        @endif
    </div>



  <div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email" class="label">Email address</label>
    <div class="control has-icons-left">  
    <input type="email" class="input" name="email" id="email" placeholder="Email">
    <span class="icon is-small is-left is-success">
                        <i class="fa fa-envelope"></i>
                    </span>
    </div>
 <p class="help is-success">Enter a valid Email Address.</p>
                @if ($errors->has('email'))
                    <span class="help">
                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                    </span>
                @endif
  </div>



 <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="label">Password</label>
                
                <div class="control has-icons-left">
                    <input type="password" class="input" name="password" id="password" placeholder="Password">
                    <span class="icon is-small is-left is-success">
                        <i class="fa fa-lock"></i>
                    </span>
                    
                </div>
                <p class="is-danger help">Must be more than 8 characters.</p>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                    </span>
                @endif
  
            </div>


  
  
 <div class="field">
                <label for="password-confirm" class="label">Confirm Password</label>                            
                <div class="control has-icons-left">
                <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                <span class="icon is-small is-left is-success">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>          
            </div>
    

 <div class="field{{ $errors->has('firstname') ? ' has-error' : '' }}">
                <label for="firstname" class="label">First Name</label>
                <div class="control">
                <input type="text" class="input" name="firstname" id="firstname" placeholder="First Name">
                </div>
                
                @if ($errors->has('firstname'))
                    <span class="help-block">
                        <p class="help is-danger">{{ $errors->first('firstname') }}</p>
                    </span>
                @endif
            </div>

    
     <div class="field{{ $errors->has('middlename') ? ' has-error' : '' }}">
      <label for="middlename" class="label">Middle Name</label>
      <div class="control">
           <input type="text" class="input" name="middlename" id="middlename" placeholder="Middle Name">
      </div>
      @if ($errors->has('middlename'))
        <span class="help-block">
            <p class="help is-danger">{{ $errors->first('middlename') }}</p>
        </span>
      @endif
  </div>

    <div class="field{{ $errors->has('lastname') ? ' has-error' : '' }}">
        <label for="lastname" class="label">Last Name</label>
        <div class="control">
            <input type="text" class="input" name="lastname" id="lastname" placeholder="Last Name">
        </div>
        @if ($errors->has('lastname'))
            <span class="help-block">
                <p class="help is-danger">{{ $errors->first('lastname') }}</p>
            </span>
        @endif
    </div>


    <div class="field{{ $errors->has('dod') ? ' has-error' : '' }}">
        <label for="dod" class="label">Date of birth</label>
        <div class="control">
          
        <input type="date" class="input" name="dod" id="dod" placeholder="Date of Birth">
        </div>
        <p class="is-success help">Choose/Enter your valid Date of Birth. Must be 18+</p>
        
        @if ($errors->has('dod'))
            <span class="help-block">
               <p class="help is-danger">{{ $errors->first('dod') }}</p>
            </span>
        @endif
    </div>

  
    <div class="field{{ $errors->has('address') ? ' has-error' : '' }}">
        <label for="address" class="label">Resident Address</label>
        
        <div class="control has-icons-left">
            <input type="text" class="input" name="address" id="address" placeholder="Address" required>
            <span class="icon is-small is-left is-success">
                <i class="fa fa-location-arrow"></i>
            </span>
        </div>
         <p class="is-success help">Enter your valid contact Address. </p>
        @if ($errors->has('address'))
            <span class="help-block">
                <p class="help is-danger">{{ $errors->first('address') }}</p>
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

    
                        <div class="field pull-right">
        <div class="control">
            <button type="submit" class=" button is-primary">Proceed</button>
        </div>
                        </div>
  

 
  
</form>
                    </section>
</div>
</div>

 
      </div>

      
      


     <script src="/js/app.js"></script>
    </body>
</html>        


