@extends('layouts.app')
@section('content')
      <h1>{{$title}}</h1>
      {{-- <p>Our Partner List</p> --}}

{{-- <div class="w3-container">
  <h3>Mobile First Fluid Grid</h3>
  <p class="w3-large">Try to resize the window!</p>
</div> --}}

{{-- <div class="w3-row">
  <div class="w3-col m1 w3-center w3-grey">1</div>
  <div class="w3-col m1 w3-center">2</div>
  <div class="w3-col m1 w3-center w3-grey">3</div>
  <div class="w3-col m1 w3-center">4</div>
  <div class="w3-col m1 w3-center w3-grey">5</div>
  <div class="w3-col m1 w3-center">6</div>
  <div class="w3-col m1 w3-center w3-grey">7</div>
  <div class="w3-col m1 w3-center">8</div>
  <div class="w3-col m1 w3-center w3-grey">9</div>
  <div class="w3-col m1 w3-center">10</div>
  <div class="w3-col m1 w3-center w3-grey">11</div>
  <div class="w3-col m1 w3-center">12</div>
</div> --}}
{{-- ==================================================================================== --}}
{{-- <div class="w3-row container">
  <div class="w3-col w3-container m6 12"   style="border:1px solid black;">
      <img class="img-responsive" src="/images/partners/AX.jpg" alt="axn">
  </div>
  <div class="w3-col w3-container m6 12"   style="border:1px solid black;">
    <img class="img-responsive" src="/images/partners/7E.png" alt="axn">
  </div>
  <div class="w3-col w3-container m6 12"   style="border:1px solid black;">
    <img class="img-responsive" src="/images/partners/OP.jpg" alt="axn">
  </div>
  <div class="w3-col w3-container m6 12"   style="border:1px solid black;">
    <img class="img-responsive" src="/images/partners/D5.jpg" alt="axn">
  </div>
</div>
<main id="main">
<section id="section-d" class="grid">
  <div class="box">
    <h2 class="content-title">Contact Us</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, suscipit. Rerum ducimus a quod, ut et voluptas obcaecati unde fuga.</p>
    <p>contact@acmewebsolutions.test</p>
  </div>
  <div class="box">
    <h2 class="content-title">About Our Company</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio earum porro deserunt, deleniti, quae facere repudiandae, officiis est exercitationem nobis iusto doloremque! Soluta excepturi in aut suscipit amet temporibus quo?</p>
  </div>
</section>
</main> --}}
{{-- ==================================================================================== --}}
<!-- Photo Grid -->
{{-- <div class="row">
  <div class="column">
    <img src="/w3images/wedding.jpg" style="width:100%">
    <img src="/w3images/rocks.jpg" style="width:100%">
    <img src="/w3images/falls2.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
    <img src="/w3images/nature.jpg" style="width:100%">
    <img src="/w3images/mist.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="/w3images/underwater.jpg" style="width:100%">
    <img src="/w3images/ocean.jpg" style="width:100%">
    <img src="/w3images/wedding.jpg" style="width:100%">
    <img src="/w3images/mountainskies.jpg" style="width:100%">
    <img src="/w3images/rocks.jpg" style="width:100%">
    <img src="/w3images/underwater.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="/w3images/wedding.jpg" style="width:100%">
    <img src="/w3images/rocks.jpg" style="width:100%">
    <img src="/w3images/falls2.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
    <img src="/w3images/nature.jpg" style="width:100%">
    <img src="/w3images/mist.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="/w3images/underwater.jpg" style="width:100%">
    <img src="/w3images/ocean.jpg" style="width:100%">
    <img src="/w3images/wedding.jpg" style="width:100%">
    <img src="/w3images/mountainskies.jpg" style="width:100%">
    <img src="/w3images/rocks.jpg" style="width:100%">
    <img src="/w3images/underwater.jpg" style="width:100%">
  </div>
</div> --}}
<div class="container-fluid">
    <div class="row" >
      @include('inc.divrowsd_entry')
        <img class="img-responsive" src="/images/partners/7E.png" alt="axn">
      @include('inc.divrowsa_outro')
      @include('inc.divrowsd_entry')
        <img class="img-responsive" src="/images/partners/AX.jpg" alt="axn">
      @include('inc.divrowsa_outro')
      @include('inc.divrowsd_entry')
        <img class="img-responsive" src="/images/partners/Cebuana.jpg" alt="axn">
      @include('inc.divrowsa_outro')
      @include('inc.divrowsd_entry')
        <img class="img-responsive" src="/images/partners/D5.jpg" alt="axn">
      @include('inc.divrowsa_outro')
      @include('inc.divrowsd_entry')
        <img class="img-responsive" src="/images/partners/OP.jpg" alt="axn">
      @include('inc.divrowsa_outro')
      @include('inc.divrowsd_entry')
        <img class="img-responsive" src="/images/partners/WU.png" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsc_entry')
      <img class="img-responsive" src="/images/partners/EPAY.png" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsc_entry')
      <img class="img-responsive" src="/images/partners/ESPN.png" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsc_entry')
      <img class="img-responsive" src="/images/partners/GMSB.png" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsc_entry')
      <img class="img-responsive" src="/images/partners/PQ.jpg" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsc_entry')
        <img class="img-responsive" src="/images/partners/SM.png" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsc_entry')
      <img class="img-responsive" src="/images/partners/HTL.jpg" alt="axn">
      @include('inc.divrowsa_outro')
      @include('inc.divrowsc_entry')
      <img class="img-responsive" src="/images/partners/NPM.gif" alt="axn">
      @include('inc.divrowsa_outro')
      @include('inc.divrowsc_entry')
      <img class="img-responsive" src="/images/partners/OF.jpg" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsa_entry')
      <img class="img-responsive" src="/images/partners/HTA.png" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsa_entry')
      <img class="img-responsive" src="/images/partners/ML.jpg" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsa_entry')
        <img class="img-responsive" src="/images/partners/GLB.png" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsa_entry')
        <img class="img-responsive" src="/images/partners/PLDT.jpg" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsa_entry')
      <img class="img-responsive" src="/images/partners/NMET.png" alt="axn">
      @include('inc.divrowsa_outro')

      @include('inc.divrowsa_entry')
        <img class="img-responsive" src="/images/partners/ROBINSON.jpg" alt="axn">
      @include('inc.divrowsa_outro')


{{-- divrowsb_entry --}}

    @include('inc.divrowsb_entry')
          <img class="img-responsive" src="/images/partners/SMART.png" alt="axn">
    @include('inc.divrowsa_outro')

    @include('inc.divrowsb_entry')
          <img class="img-responsive" src="/images/partners/TP.png" alt="axn">
    @include('inc.divrowsa_outro')

    @include('inc.divrowsb_entry')
          <img class="img-responsive" src="/images/partners/ussc.png" alt="axn">
    @include('inc.divrowsa_outro')

    </div>
  </div>



@endsection
