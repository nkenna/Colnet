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
       <table class="table table-bordered table-striped table-responsive table-hover">
 <caption> All Jobs </caption>
 <thead class="">
  <tr>
   <th><label>Ref Num</label>
   <th><label >Title</label>
   <th><label >State</label>
   <th><label >Area</label>
  </tr>
  @foreach($users as $user)
  <tr>
      <td>{{$user->ref_num}}</td>
      <td>{{$user->title}}</td>
      <td>{{$user->resident}}</td>
      <td>{{$user->residentlga}}</td>
      <td><a href="{{url('/admin/job/'.$user->id)}}" class="is-link">View Job</a></td>
  </tr>
  @endforeach
 <tbody>

</table>
           </section>
       </div>

    </body>
</html>

