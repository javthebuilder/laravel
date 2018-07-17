@extends('layouts.app')
@section('content')
      <h2>{{$title}}</h2>
      <hr>
      {{-- <p>Where to buy</p> --}}


{{-- <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> --}}

<div class="row">
  <div class="col-sm">
    <div class="card">
      <img class="card-img-top" src="/images/areas/convience_1600x777.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Convenience Store</h5>
        <p class="card-text">If it feels like there is a convenience store on just about every corner, that’s because there is.</p>
        <a href="#" class="btn btn-primary">Check store loacations</a>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <div class="card">
      <img class="card-img-top" src="/images/areas/netcafe_1600x777.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Internet Cafes</h5>
        <p class="card-text">Top of the line Gaming Gears. Fast Internet Access. </p>
        <a href="#" class="btn btn-primary">See our Internet Cafes</a>
      </div>
    </div>
  </div>
{{--
  <div class="col-sm">
    <div class="card">
      <img class="card-img-top" src="https://www.rockwellcollins.com/-/media/Images/rc2016/marketing/S/Self-Serve-Kiosks/self-serve-kiosks1.jpg?bc=White&la=en&w=1920&lastupdate=20161004195720&hash=5746C9468DFDB153F96F9DF8B7621BFE9F1595F2" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Kiosks</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <div class="card">
      <img class="card-img-top" src="https://businessmirror.com.ph/wp-content/uploads/2018/04/Vending-machines-696x313.gif" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Vending Machine</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div> --}}
</div>

<div class="row">
  <div class="col-sm">
    <div class="card">

      <img class="card-img-top" src="/images/areas/kiosk_1600x777.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Kiosks</h5>
        <p class="card-text">Easy Access on public areas and convient on people who are always on the go.</p>
        <a href="#" class="btn btn-primary">See the locations</a>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <div class="card">
      <img class="card-img-top" src="/images/areas/vending_1600x777.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Vending Machine</h5>
        <p class="card-text">Also located on public areas specially on publc transport sites</p>
        <a href="#" class="btn btn-primary">Se the locations</a>
      </div>
    </div>
</div>



<hr>
{{-- <div class="container"> --}}
  {{-- <div class="row">
    <div class="col-lg">
      <div class="card" style="width: 20rem auto;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Vending Machine</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>


    <div class="col-lg">
      <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Vending Machine</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

  </div> --}}
{{-- </div> --}}


@endsection
