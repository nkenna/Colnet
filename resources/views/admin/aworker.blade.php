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
           <section class="section">
               <div class="columns">
                   <div class="column is-half is-offset-3">
                       <div class="box">
                           <article class="media">
                               <figure class="media-left is-128x128">
                                   <img width="128" height="128" src="{{$user->image}}" alt="Image"> 
                               </figure>
                               
                               <div class="media-content">
                                   <div class="content">
                                       <p>
                                           <strong>{{$user->firstname}} {{$user->middlename}} {{$user->lastname}}</strong></p>
                                         
                                           <p>Age: {{$user->getAge()}}yrs</p>
                                           <p>Location: {{$user->residentlga}}, {{$user->resident}}</p>
                                           <p>Primary Skill: {{$user->skill1}}</p>
                                           <p>Secondary Skill: {{$user->skill2}}</p>
                                       <footer class="content">
                                       <a class="button is-success" href="">Give Job</a>
                                       <a class="button is-success" href="">Suspend Account</a>
                                       <a class="button is-success" href="">Delete Account</a>

                                       </footer>
                                   </div>
                               </div>
                           </article>
                       </div>
                   </div>
                   </div>
               </div>
           </section>
       </div>
    </body>
</html>
