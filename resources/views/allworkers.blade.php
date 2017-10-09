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
    <body class="usefont">
       @include('layouts.header')

       <div class="container">


       <section class="section">
           <div class="form-inline container">
           <form method="GET" action="/all/workers" >

            <div class="field">
      <label for="resident" class="label">Resident State</label>
      <p class="is-success help">Select your State of resident or the State to search.</p>
      
      <div class="control has-icons-left">
          <span class="select">
            <select id="resident" name="resident">
                  <option value="" selected="selected" >Select State of Resident</option>
 
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
     
    </div>




            <div class="field">
            <label for="skill" class="label">Select a Skill to search</label>
              <div class="control">
                <span class="select">
                  <select name="skill">
                    <option value="">Select one skill</option>
                  
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
            </div>

            <div class="field">
              <div class="control">
                <button type="submit" class="button is-dark">Search</button>
              </div>
            </div>
        </form>
           </div>
       </section>


            <section class="section">
                <div class=" section container-fluid">
            @if($state)
            <h1 class="title has-text-danger has-text-centered">Search term not found</h1>
       @endif
                </div>
                <div class="columns is-mobile is-multiline">


                     @foreach($users as $user)
                    <div class="column is-4 is-12-mobile">
                       <div class="card">
                           <header class="card-header">
                               <p class="card-header-title">
                                   {{$user->firstname}} {{$user->middlename}} {{$user->lastname}}
                               </p>
                               
                           </header>
                           
                           <div class="card-content">
                               <div class="content">
                                  <p>Location: {{$user->resident}}</p>
                                  <p>Location: {{$user->residentlga}}</p>
                                  <p>Primary Skill: {{$user->skill1}}</p>
                                  <p>Secondary Skill: {{$user->skill2}}</p>
                                   
                               </div>
                           </div>
                           <footer class="card-footer">
                                <a href="{{url('/view/job/'.$user->id)}}" class="card-footer-item">Details</a>
                                
    
                            </footer>
                       </div>
                   </div>
                   @endforeach

                </div>
            </section>
       </div>
       
       </body>
       </html>