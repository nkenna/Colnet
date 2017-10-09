<nav class="navbar is-danger" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ url('/') }}">
        Col<b style="color: green">NET</b>
    </a>

    <button class="button navbar-burger is-active" data-target="navMenu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
    
    <div class="navbar-menu" id="navMenu">
  <div class="navbar-start">
    <!-- navbar items -->
    <a class="navbar-item" href="{{ url('/') }}">
  Home
</a>
    
     <a class="navbar-item" href="{{ url('/') }}">
  About
</a>
    
     <a class="navbar-item" href="{{ url('/') }}">
  Contact Us
</a>
    
     <a class="navbar-item" href="{{ url('/all/workers') }}">
  All Workers
</a>
    
     <a class="navbar-item" href="{{ url('/all/jobs') }}">
  All Jobs
</a>
  </div>

  <div class="navbar-end">
    <!-- navbar items -->
    <div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link">
  WELCOME
</a>
        
        <div class="navbar-dropdown is-boxed">
            @if(Auth::guard('creator')->user())
            <a class="navbar-item " href="{{ url('/home/creator') }}">
            DashBoard
          </a>
            
            <a class="navbar-item " href="">
            Edit Profile
          </a>
            
            <a class="navbar-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            Sign out
          </a>
             <form id="logout-form" action="{{ url('/logout/creator') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
             </form>
           
            
            @elseif(Auth::check())
            <a class="navbar-item " href="{{ route('home') }}">
            DashBoard
          </a>
            
            <a class="navbar-item " href="">
            Edit Profile
          </a>
            
            <a class="navbar-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            Sign out
          </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
             </form>
            
             
           @else
            <a class="navbar-item " href="{{ route('register') }}">
            Sign up
          </a>
            
            <a class="navbar-item " href="{{ route('login') }}">
            Sign in
          </a>
           
           @endif
          
        </div>
    </div>
  </div>
</div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});

    </script>