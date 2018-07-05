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
 });

 </script>
 </body>
 </html>
{{-- ====================================================================================== --}}
