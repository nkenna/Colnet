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
           <section class="section">
               <div class="columns">
                   <div class="column is-info is-5">
                       <div class="box">
                           <article class="media">
                               <figure class="media-left is-128x128">
                                   <img width="128" height="128" src="{{Auth::user()->image}}" alt="Image"> 
                               </figure>
                               
                               <div class="media-content">
                                   <div class="content">
                                       <p>
                                           <strong>{{Auth::user()->firstname}} {{Auth::user()->middlename}} {{Auth::user()->lastname}}</strong>  <small>  {{Auth::user()->getAge()}}yrs</small>
                                           <br>
                                           Rating: {{Auth::user()->getRating()}} from {{Auth::user()->getNumRating()}}
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
                                           Resident: {{Auth::user()->resident}}
                                           <br>
                                           Area: {{Auth::user()->residentlga}}
                                           <br>
                                           Primary Skill: {{Auth::user()->skill1}}
                                           <br>
                                           Secondary Skill: {{Auth::user()->skill2}}
                                           <br>
                                           Jobs Completed: 45
                                           
                                       </p>
                                       
                                   </div>
                               </div>
                           </article>
                       </div>
                   </div>
                   
                   <div class="column is-info">
                       
                   </div>
               </div>
           </section>
           
           <section class="section">
               <div class="section ">
                   <h2 class="has-text-centered title text-center">Jobs that fit your Skills</h2>
               </div>
               
               
               <div class="columns is-multiline is-mobile is-desktop is-widescreen is-fullhd">
                   @foreach($jobs as $job)
                    <div class="column is-4 is-12-mobile">
                       <div class="card">
                           <header class="card-header">
                               <p class="card-header-title">
                                   {{$job->title}}
                               </p>
                               
                           </header>
                           
                           <div class="card-content">
                               <div class="content">
                                  <p>Location: {{$job->resident}}</p>
                                  <p>Location: {{$job->residentlga}}</p>
                                  <p>Required Skill: {{$job->skill1}}</p>
                                  <p>Required Skill: {{$job->skill2}}</p>
                                   
                               </div>
                           </div>
                           <footer class="card-footer">
                                <a href="{{url('/view/job/'.$job->createdby.'/'.$job->id)}}" class="card-footer-item">Access Job</a>
                                <p class="is-small card-footer-item"><small>{{$job->getDays()}}days ago</small></p>
    
                            </footer>
                       </div>
                   </div>
                   @endforeach
               </div>
               
           </section>
       </div>
       
       
    </body>
</html>
