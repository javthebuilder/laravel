{{-- <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">{{config('app.name','PLayer One')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/partnerlist">Partnet List</a>
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
        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}
<nav class="navbar navbar-inverse">
  <div class="container">

    <div class="navbar-header">
      <a class="navbar-brand navbar-brand-logo" href="/">
         <div class="logo">
             <img src="/images/Player_One_Logo_A_Red_Small.jpg">
         </div>
         {{-- <div class="brand"> Player 1</div> --}}
       </a>

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      {{-- <a class="navbar-brand" href="/" id="groupName">Player 1</a> --}}


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
        {{-- <li class=""><a href="/services" id="goHome">Services</a></li> --}}

      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="Close"><span class="glyphicon glyphicon-user"></span></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul> -->
    </div>
  </div>
</nav>
