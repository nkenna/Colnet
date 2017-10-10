<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ColNET - All Jobs</title>

        
        <link href="/css/bulma.css" rel="stylesheet" type="text/css">
        <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">

    </head>
    <body>
       

       <div class="container">


<div class="content">
    <p class="title has-text-centered has-text-grey-dark">Welcome</p>
    <p>You have successfully registered. Click on the link below to activate your account:</p>
    <p><a class="button is-outlined is-info" ref="{{url('/worker/activate/'.$user->ref_num)}}">Activate</a></p>
    
    <p>Use this link incase you are experiencing difficulties with the previous link: http://localhost:8000/worker/activate/{{$user->ref_num}}</p>
</div>
       </div>
    </body>
</html>

