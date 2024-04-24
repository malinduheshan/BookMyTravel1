@extends('layouts.frontend')
<div class="homeimg">
@section('content')



<div class="bodyclass">
  <div class="container d-flex h-100 p-3 mx-auto flex-column">
    <div class="row g-3">
      <div class="col-md-7 col-sm-12">
        <div class="headp">
        Your Gateway <br> to <a style="color: #4CE40C;">Unforgettable</a> Experiences in Sri Lanka</p>
      </div>
        <p style="font-size: 22px">Embark on a journey of a lifetime with our travel planning web application. 
          Your gateway to unforgettable experiences awaits in the vibrant landscapes
          and rich culture of Sri Lanka. Discover, plan, and create lasting
          memories effortlessly</p>
      </div>
      <div class="col-md-5 col-sm-12">
        <img src="../img/homegirl1.png" alt="Homegirl" class="img-fluid">
      </div>
    </div>
  </div>
</div>
</div><!--backgrpund img div-->



<div class="container">
<form style="padding: 20px; border-radius: 30px; box-shadow: 0 0 40px rgba(0.2, 0.2, 0.2, 0.2); margin-top: 20px;">
  <div class="row">
      <div class="inputitem col-md-3 col-sm-12 mb-3 d-flex align-items-center flex-column">
          <label for="visitInput" class="form-label mb-1" style="font-size: 25px;">Visit</label>
          <input type="text" class="form-control visitinput" style="border-radius: 10px; width: 100%; height: 60px; text-align: center;" placeholder="Where are you going?">
      </div>

      <div class="inputitem col-md-3 col-sm-12 mb-3 d-flex align-items-center flex-column">
          <label for="fromInput" class="form-label mb-1" style="font-size: 25px;">From</label>
          <input type="text" class="form-control visitinput" style="border-radius: 10px; width: 100%; height: 60px; text-align: center;" placeholder="Where are you going?">
      </div>

      <div class="inputitem col-md-3 col-sm-12 mb-3 d-flex align-items-center flex-column">
          <label for="guestInput" class="form-label mb-1" style="font-size: 25px;">Guest</label>
          <input type="text" class="form-control visitinput" style="border-radius: 10px; width: 100%; height: 60px; text-align: center;" placeholder="Where are you going?">
      </div>

      <div class="inputitem col-md-3 col-sm-12 mb-3">
          <button type="submit" class="btn btn-success btn-lg btn-block" style="background-color: #44B415; border: none; border-radius: 10px; width: 100%; height: 60px; margin-top: 40px;">Search</button>
      </div>
  </div>
</form>
</div>


<!--Populer Travel Place-->

<div class="container">

<div class="populertravel text-center mb-4">
<a style="color: #3EB00F;">Populer </a> Travel Place
</div>

<div class="line d-flex justify-content-center align-items-center mb-5">
<img src="../img/greenline.png" alt="line">
</div>


<!--Populer Travel card-->
<div class="row mb-4">

  @foreach ($blogs as $blog)
      
  <div class="col-md-4 mb-5 col-sm-12">
    <div class="card h-100" style="border-radius: 20px;">
    <img src="../img/sigiriya1.png" class="card-img-top" style="border-radius: 20px 20px 0px 0px;" alt="...">
    <div class="card-body">
      <h5 class="card-title"> {{ $blog->title }} </h5>
      <div class="row">
        <div class="col-6">
          <p class="card-date"> {{ date('Y-m-d', strtotime($blog->created_at)) }} </p>
        </div>
        <div class="col-6">
          <p class="card-owner">malindu heshan</p>
        </div>
      </div>
    <p class="card-text" style="color: #787878">Sigiriya or Sinhagiri is an ancient rock fortress
    located in the northern Matale District near the
    town of Dambulla in the Central Province.</p>
    <a href="{{ route('fullblog', $blog->id) }}" class="btn btn-success btn-lg btn-block custom-btn">Read More</a>
    </div>
    </div>
  </div>


  @endforeach


<!--
<div class="col-md-3 mb-5 col-sm-12">
<div class="card h-100" style="border-radius: 20px;">
<img src="../img/nine-arch.png" class="card-img-top" style="border-radius: 20px 20px 0px 0px;" alt="...">
<div class="card-body">
<h5 class="card-title">Sigiriya Rock</h5>
<p class="card-text" style="color: #787878">Sigiriya or Sinhagiri is an ancient rock fortress
located in the northern Matale District near the
town of Dambulla in the Central Province.</p>
<a href="#" class="btn btn-success btn-lg btn-block custom-btn">Read More</a>
</div>
</div>
</div>

<div class="col-md-3 mb-5 col-sm-12">
<div class="card h-100" style="border-radius: 20px;">
<img src="../img/daladamaligawa.png" class="card-img-top" style="border-radius: 20px 20px 0px 0px;" alt="...">
<div class="card-body">
<h5 class="card-title">Sigiriya Rock</h5>
<p class="card-text" style="color: #787878">Sigiriya or Sinhagiri is an ancient rock fortress
located in the northern Matale District near the
town of Dambulla in the Central Province.</p>
<a href="#" class="btn btn-success btn-lg btn-block custom-btn">Read More</a>
</div>
</div>
</div>

<div class="col-md-3 mb-5 col-sm-12">
  <div class="card h-100" style="border-radius: 20px;">
  <img src="../img/nallur.png" class="card-img-top" style="border-radius: 20px 20px 0px 0px;" alt="...">
  <div class="card-body">
  <h5 class="card-title">Nallur temple</h5>
  <p class="card-text" style="color: #787878">Sigiriya or Sinhagiri is an ancient rock fortress
  located in the northern Matale District near the
  town of Dambulla in the Central Province.</p>
  <a href="#" class="btn btn-success btn-lg btn-block custom-btn ">Read More</a>
  </div>
  </div>
  </div>
-->



</div>

<!--Why choose Us-->

<div class="row mt-4" >

<div class="col-md-6 col-sm-12">
<img src="../img/sigiriyamanipulation.png" class="card-img-top" style="border-radius: 20px 20px 0px 0px;" alt="...">
</div>

<div class="col-md-6 col-sm-12">
<div class="whychooseus mb-4">
<a style="color: #3EB00F;">Why </a> Choose Us
</div>

<div class="line d-flex mb-5">
<img src="../img/greenline.png" alt="line">
</div>

<p class="manipulationtext" style="color: #787878">Choose us for a seamless journey in Sri Lanka. With personalized travel experiences, effortless planning, and comprehensive insights, we redefine the way you explore. Elevate your adventure with “Book My Travel” your trusted partner in crafting memorable and stress-free travel moments in the mesmerizing landscapes of Sri Lanka.</p>

</div>

</div>






@endsection