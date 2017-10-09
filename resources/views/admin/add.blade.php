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
       @include('layouts.adminheader')
       
       <div class="container">
            <div class="columns">
                <div class="column is-6 is-12-mobile is-offset-3">
                    <section class="section">
       
       <form role="form" method="post" action="/admin/add" >
          {{ csrf_field() }}

    

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
    

 <div class="field{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="label">Name(s)</label>
                <div class="control">
                <input type="text" class="input" name="name" id="name" placeholder="Name(s)">
                </div>
                
                @if ($errors->has('name'))
                    <span class="help-block">
                        <p class="help is-danger">{{ $errors->first('name') }}</p>
                    </span>
                @endif
            </div>

          
          <div class="field{{ $errors->has('level') ? ' has-error' : '' }}">
        <label for="level" class="label">Level</label>
         <p class="is-success help">Select Admin Level</p>
        <div class="control">
          <span class="select">
       
        <select id="level" name="level">
                              
            <option value="">Select Admin level</option>
            
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
          </span>
        </div>
    </div>
    
   
                        <div class="field pull-right">
        <div class="control">
            <button type="submit" class=" button is-primary">Save</button>
        </div>
                        </div>
  

 
  
</form>
                    </section>
                </div>
            </div>
       </div>
       
    </body>
</html>

