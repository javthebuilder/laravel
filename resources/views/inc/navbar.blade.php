{{-- <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand navbar-brand-logo" href="/">
         <div class="logo">
             <img src="/images/Player_One_Logo_A_Red_Small.jpg">
         </div>
       </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <br>
      <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="/" id="goHome">Home</a></li>
        <li class=""><a href="/partnerlist" id="">Partner List</a></li>
        <li class=""><a href="/wheretobuy" id="">Where to Buy</a></li>
        <li class=""><a href="/faq" id="">FAQ</a></li>
        <li class=""><a href="/about" id="">About Us</a></li>
        <li class=""><a href="/contactus" id="">Contact Us</a></li>
      </ul>

    </div>
  </div>
</nav> --}}

{{-- <nav class="navbar navbar-inverse"> --}}


<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  {{-- <a class="navbar-brand" href="#">Navbar w/ text</a> --}}
  <a class="navbar-brand navbar-brand-logo" href="/">
    <div class="logo">
       <img src="/images/Player_One_Logo_A_Red_Small.jpg">
    </div>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="nav navbar-nav">
      &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
      &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
      &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
    </ul>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        &nbsp;
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/partnerlist">Partner List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/wheretobuy">Where to Buy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/faq">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contactus">Contact Us</a>
      </li>

        {{-- <li class="nav-item"><a href="/" id="goHome">Home</a></li>
        <li class="nav-item"><a href="/partnerlist" id="">Partner List</a></li>
        <li class="nav-item"><a href="/wheretobuy" id="">Where to Buy</a></li>
        <li class="nav-item"><a href="/faq" id="">FAQ</a></li>
        <li class="nav-item"><a href="/about" id="">About Us</a></li>
        <li class="nav-item"><a href="/contactus" id="">Contact Us</a></li> --}}



    </ul>

    <!-- Right Side Of Navbar -->
           <ul class="navbar-nav mr-auto ml-auto" >
               <!-- Authentication Links -->
               @if (Auth::guest())
                  <li class="nav-item">&nbsp;</li>
                   <li class="nav-item"><a href="{{ route('login') }}"><button type="button" class="btn btn-outline-primary btn-md">Login</button></a></li>
                   <li class="nav-item">&nbsp;</li>
                   <li class="nav-item"><a href="{{ route('register') }}"><button type="button" class="btn btn-outline-success btn-md">Register</button></a></li>
               @else
                   <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                           {{ Auth::user()->name }} <span class="caret"></span>
                       </a>

                       <ul class="dropdown-menu" role="menu">
                           <li class="nav-item"><a href="/dashboard">Dashboard</a></li>
                           <li class="nav-item">
                               <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                   Logout
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   {{ csrf_field() }}
                               </form>
                           </li>
                       </ul>
                   </li>
               @endif
           </ul>
  </div>
</nav>
