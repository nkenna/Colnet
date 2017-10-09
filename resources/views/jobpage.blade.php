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
       <section class="section">
           <div class="columns">
               <div class="column is-6 is-12-mobile is-offset-3">
          <div class="card content">
                               <header class="card-header">
    <p class="card-header-title text-center">
      {{{$jb->title}}} 
    </p>
    
  </header>
                   
                    <div class="card-content">
                        <h4 class="subtitle">Job Details:</h4>
                        <p>Description: {{$jb->disc}}
                            <br>
                            <p>Created by: {{$crt->firstname}}
                            <br>
                        <p>State: {{$jb->resident}}
                            <br>
                        Location: {{$jb->residentlga}}
                        <br>
                        Required Skill1: {{$jb->skill1}}
                            <br>
                       Required Skill2: {{$jb->skill2}}
                            <br>
                        Date Added: {{$jb->date_created}}
                        </p>
                        <footer class="card-footer">
                            @if(Auth::guard('creator')->user())
       <button class="button is-danger">Edit Job</button>
       @elseif(Auth::check())
       <button class="button is-dark content">Ask for this Job</button>
       @endif
                        </footer>
                    </div>
                  
                </div>
           </div>
       </div>
       </section>
       
    </body>
</html>
