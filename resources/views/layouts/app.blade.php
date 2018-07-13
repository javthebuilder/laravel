 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>{{config('app.name','PLayer One')}}</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
   {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
   {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script> --}}
   {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> --}}
   {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> --}}

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
   <style>
       .js-example-basic-single{
         width:250px;
         }

         .logo {
           position: fixed;
           top: 1em;
           left: 1em;
           display: fluid;
          }
         .carousel-inner img {
         width: 100%;
         height: 100%;
     }
     img {
      display: block;
      width: 100%;
      height: auto;
    }

    .ml-auto .dropdown-menu {
      left: auto !important;
      right: 0px;
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
 </head>
 <body>

@include('inc.navbar')
<br>
<br>
<br>
<div class="container">
  @include('inc.messages')
  <br>
  @yield('content')
</div>

 <script src='https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js'></script>
 <script>


 // $( ".navbar-toggle" ).click(function() {
  // console.log( "Handler for .click() called." );
   // $("#myNavbar").collapse('hide');
 // });
 $("#goHome").click(function(){
   console.log("Go Home");
   $("#myNavbar").collapse('hide');

 });
 </script>
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
 </body>
 </html>
{{-- ====================================================================================== --}}
