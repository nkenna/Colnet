<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ColNET</title>

               <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="/css/bulma.css" rel="stylesheet" type="text/css">
    </head>
    <body class="usefont">
       @include('layouts.header')
       
       <section class="section">
           <div class="container">
               <div class="columns ">
                   <div class="column is-danger is-8 is-12-mobile">
                    
                       <div class="has-text-centered  hero is-large is-primary" style="color: #fff; background: url('img/design/t7.jpg');">
                           <div class="hero-body ">
                               <h1 class="title has-text-danger">
                                   Title
                               </h1>
                                 <h2 class="subtitle">
        Subtitle
      </h2>
                               <a class="button is-danger is-large is-outlined">Get Started</a>
                           </div>
                       </div>
                      
                   </div>
                   
            <div class="column is-danger is-12-mobile ">
               
                  <div class="card content">
                      <header class="card-header">
    <p class="card-header-title has-text-centered has-text-danger">
      Looking for who will get the Job done?
    </p>
    
  </header>
            <div class="card-content has-text-danger">
               
      <p> We have a pool of verified skilled Tradesmen that can deliver that Job for you. 
          Create a Profile to add that Job.
                </p>
                
                
                <footer class="card-footer">
                    <a class="card-footer-item" href="{{url('/register/creator')}}">Create Profile</a>
                    <a class="card-footer-item">Sign in</a>
                </footer>
            </div>
        </div>
                       
                       
         <div class="card is-danger content">
             
                       <header class=" card-header is-danger has-text-centered">
    <p class="card-header-title has-text-centered has-text-danger">
      Skilled/Tradesmen
    </p>
                       </header>
    
            <div class="card-content has-text-danger">
                <p class="text-justify">
                    Have you got Skill, Create a profile 
          to start meeting clients that need your skill.
                </p>
                
                <footer class="card-footer">
                    <a class="card-footer-item" href="{{url('/register')}}">Create Profile</a>
                    <a class="card-footer-item" href="{{url('/login')}}">Sign in</a>
                </footer>
            </div>
        </div>
                              
                       
                   </div>
               </div>
           </div>
       </section>
       
       
       <section style="color: #fff; background: url('img/design/t2.jpg') ;" class="section is-dark is-medium">
           <div class="columns">
               <div class="column is-half">
                   
               </div>
               
               <div style="" class="box has-text-centered column is-half">
                   <p class="subtitle">Browse through our pool of Jobs. Search for jobs by title, location, etc.</p>
                   <a class="button-green button is-large is-info is-outlined" href="{{url('/all/jobs')}}">All Jobs</a>
               </div>
           </div>
       </section>
       
       <section style="background: url('img/design/t3.jpg') ;" class="section is-dark is-medium">
           <div class="columns">
               <div class="column is-half">
                   
               </div>
               
               <div style="" class="box has-text-centered column is-half">
                   <p class="subtitle">Browse through our pool of verified Skilled tradesmen. Search for skilled tradesmen by name, location, skills etc.</p>
                   <a class="button-green button is-large is-success is-outlined" href="{{url('/all/workers')}}">All Skilled Tradesmen</a>
               </div>
           </div>
       </section>
       
      @include('layouts.footer')
    </body>
</html>
