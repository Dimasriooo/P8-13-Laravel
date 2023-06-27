@extends('templet/main')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/baju1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/baju2.1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/baju3.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/baju4.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection


@section('content2')
<div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="../img/baju1.jpeg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">T-SHIRT Atdzz black</h5>
        <p class="card-text">This is a T-SHIRT Atdzz black</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="../img/baju2.1.jpeg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">T-SHIRT Atdzz white</h5></h5>
        <p class="card-text">This is a T-SHIRT Atdzz white</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="../img/baju3.jpeg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">T-SHIRT Atdzz grey</h5>
        <p class="card-text">This is a T-SHIRT Atdzz grey</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="" class="btn">
      <img src="../img/baju4.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">T-SHIRT Atdzz blue</h5>
        <p class="card-text">This is a T-SHIRT Atdzz blue</p>
      </div>
    </a>
    </div>
  </div>
</div
@endsection