{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>{{config('app.name','PLayer One')}}</title>
    </head>
    <body>
      @include('inc.navbar')
      <div class="container">
        @yield('content')
      </div>
    </body>


 </body>
 <script>
 $( ".navbar-toggle" ).click(function() {
  console.log( "Toggle" );
});
 </script>
 </html> --}}
 {{-- ==================================================================================== --}}
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>{{config('app.name','PLayer One')}}</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style>
/*
body {
margin: 0;
font-family: Arial, Helvetica, sans-serif;
background: #333;
color: #fff;
font-size: 1.1em;
line-height: 1.5;
text-align: center;
}

img {
display: block;
width: 100%;
height: auto;
}

h1,
h2,
h3 {
margin: 0;
padding: 1em 0;
}

p {
margin: 0;
padding: 1em 0;
}

.btn {
display: inline-block;
background: #333;
color: #fff;
text-decoration: none;
padding: 1em 2em;
border: 1px solid #666;
margin: 0.5em 0;
}

.btn:hover {
background: #eaeaea;
color: #333;
}

/* Header Showcase */

#showcase {
min-height: 450px;
color: #fff;
text-align: center;
}

#showcase .bg-image {
position: absolute;
background: #333
  url("https://static.pexels.com/photos/248515/pexels-photo-248515.png");
background-position: center;
background-repeat: no-repeat;
background-size: cover;
width: 100%;
height: 450px;
z-index: -1;
opacity: 0.4;
}

#showcase h1 {
padding-top: 100px;
padding-bottom: 0;
}

#showcase .content-wrap,
#section-a .content-wrap {
padding: 0 1.5em;
}

/* Section A */

#section-a {
background: #eaeaea;
color: #333;
padding-bottom: 2em;
}

/* Section B */

#section-b {
padding: 2em 1em 1em;
}

#section-b ul {
list-style: none;
margin: 0;
padding: 0;
}

#section-b li {
margin-bottom: 1em;
background: #fff;
color: #333;
}

.card-content {
padding: 1.5em;
}

/* Section C */

#section-c {
background: #fff;
color: #333;
padding: 2em;
}

/* Section D / Boxes */

#section-d .box {
padding: 2em;
color: #fff;
}

#section-d .box:first-child {
background: #2690d4;
}
#section-d .box:nth-child(2) {
    background: red;
}

/* Footer */

#main-footer {
padding: 2em;
background: #000;
color: #fff;
text-align: center;
}

#main-footer a {
color: #2690d4;
text-decoration: none;
}

/* Media Queries */

@media (min-width: 700px) {
.grid {
  display: grid;
  grid-template-columns: 1fr repeat(2, minmax(auto, 25em)) 1fr;
}

#section-a .content-text {
  columns: 2;
  column-gap: 2em;
}

#section-a .content-text p {
  padding-top: 0;
}

.content-wrap,
#section-b ul {
  grid-column: 2/4;
}

.box,
#main-footer div {
  grid-column: span 2;
}

#section-b ul {
  display: flex;
  justify-content: space-around;
}

#section-b li {
  width: 31%;
}
}
*/
   </style>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style>
       .js-example-basic-single{
         width:250px;
         }
       </style>
 </head>
 <body>

@include('inc.navbar')

<div class="container">
  @yield('content')
</div>

 <script src='https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js'></script>
 <script>


 $( ".navbar-toggle" ).click(function() {
   console.log( "Handler for .click() called." );
   $("#myNavbar").collapse('hide');
 });
 $("#goHome").click(function(){
   console.log("Go Home");
   $("#myNavbar").collapse('hide');


 });
 </script>
 </body>
 </html>
{{-- ====================================================================================== --}}
