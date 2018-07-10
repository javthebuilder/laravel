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
       .image {
      display: block;
      width: 100%;
      height: auto;
    }

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}
.col-md-2:hover .overlay {
  opacity: 0.5;
}
.col-md-3:hover .overlay {
  opacity: 0.5;
}
.col-md-4:hover .overlay {
  opacity: 0.5;
}
.col-md-6:hover .overlay {
  opacity: 0.5;
}
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.col-md-2{
  /* border-style: solid;
  border-width: 1px; */
}
.col-md-3{
  /* border-style: solid;
  border-width: 1px; */
}
.col-md-4{
  /* border-style: solid;
  border-width: 1px; */

}
.col-md-6{
  /* border-style: solid;
  border-width: 1px; */
  width: auto; /* or whatever width you want. */
  max-width:auto; /* or whatever width you want. */

}

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
