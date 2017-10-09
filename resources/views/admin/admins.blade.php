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
 <caption> All Admins </caption>
 <thead class="">
  <tr>
   <th><label>Ref Num</label>
   <th><label >Email</label>
   <th><label >Level</label>
  </tr>
  @foreach($users as $user)
  <tr>
      <td>{{$user->ref_num}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->level}}</td>
     
      <td><a href="{{url('/admin/admin/'.$user->id)}}" class="is-link">View Admin</a></td>
  </tr>
  @endforeach
 <tbody>

</table>
           </section>
       </div>

    </body>
</html>


