@extends('layouts.app')
@section('content')
<div>
  {{-- <div class="container"> --}}
      {{-- <h2>Carousel Example</h2> --}}
    <div id="demo" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        <li data-target="#demo" data-slide-to="5"></li>
      </ol>
      {{-- <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul> --}}



      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="carousel-item active">
          {{-- <img src="la.jpg" alt="Los Angeles" style="width:100%;"> --}}
          {{-- {{ HTML::image('img/CO01.jpg', 'alt text', array('class' => 'css-class')) }} --}}
          {{-- {!! Html::image('img/CO01.jpg') !!} --}}
          <img src="/img/CO28.jpg" class="css-class" alt="alt text"  style="width:100%;">
          <div class="carousel-caption">
            <h3>Tom Clancy's Ghost Recon</h3>
            <p>BECOME A GHOST</p>
          </div>
        </div>

        <div class="carousel-item">
          {{-- <img src="chicago.jpg" alt="Chicago" style="width:100%;"> --}}
          <img src="/img/CO02.jpg" class="css-class" alt="alt text"  style="width:100%;">
          <div class="carousel-caption">
            <h3>Battle Field</h3>
            <p>Patch Update</p>
          </div>
        </div>

        <div class="carousel-item">
          {{-- <img src="ny.jpg" alt="New York" style="width:100%;"> --}}
          <img src="/img/CO03.jpg" class="css-class" alt="alt text"  style="width:100%;">
          <div class="carousel-caption">
            <h3>Spidey is Back !</h3>
            <p>New Game Next Quarter</p>
          </div>
        </div>
        <div class="carousel-item">
          {{-- <img src="ny.jpg" alt="New York" style="width:100%;"> --}}
          <img src="/img/CO07.jpg" class="css-class" alt="alt text"  style="width:100%;">
          <div class="carousel-caption">
            <h3>New Cars for Dirt</h3>
            <p>Test it now</p>
          </div>
        </div>
        <div class="carousel-item">
          {{-- <img src="ny.jpg" alt="New York" style="width:100%;"> --}}
          <img src="/img/CO05.jpg" class="css-class" alt="alt text"  style="width:100%;">
          <div class="carousel-caption">
            <h3>LOL schedule update</h3>
            <p>New XP rate at the jungle</p>
          </div>
        </div>
        <div class="carousel-item">
          {{-- <img src="ny.jpg" alt="New York" style="width:100%;"> --}}
          <img src="/img/CO06.jpg" class="css-class" alt="alt text"  style="width:100%;">
          <div class="carousel-caption">
            <h3>RE-Vive Cabal?</h3>
            <p>Plan to revive the Old Cabal</p>
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#demo" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#demo" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
    <br>

{{-- <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/CO28.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="/img/CO29.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="/img/CO32.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> --}}

<br>
    <div class="jumbotron text-center">
        <h1>Welcome To Player ONE !</h1>
        <p>PLAYER <b>O</b>NE puts the player <b>FIRST<b></p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>

    </div>
@endsection
