@extends('templates.layouts')
@section('content')
<style>
  .card {
    width: 100%;
    max-width: 18rem;
    margin-top: 40px;
  }

  @media (min-width: 576px) {
    .card {
      max-width: 100%;
    }
  }

  @media (min-width: 768px) {
    .card {
      max-width: 18rem;
    }
  }

  @media (min-width: 992px) {
    .card {
      max-width: 22rem;
    }
  }
</style>
<!-- coursel -->
<div class="mx-auto d-flex justify-content-center">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="max-width: 90%; border-radius: 10px; overflow: hidden;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('./assets/img/sliderhome.png')}}" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="{{url('./assets/img/sliderhome.png')}}" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="{{url('./assets/img/sliderhome.png')}}"  class="d-block w-100" alt="">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div class="mx-auto" style="max-width: 90%; margin-top: 40px;">
  <div class="row justify-content-start align-items-center">
    <h2 style="color: #31308B; text-align: left; font-size: 24px;">New Event</h2>
    <div class="card">
      <img src="{{url('https://static.vecteezy.com/system/resources/previews/022/283/762/non_2x/world-music-day-banner-design-free-vector.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kesatuan Music Camp</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{ url('/Card') }}" class="card-link text-end" style="font-size: 12px;">see more...</a>
      </div>
    </div>
  </div>
</div>
<div class="mx-auto" style="max-width: 90%; margin-top: 40px;">
  <div class="row justify-content-start align-items-center">
    <h2 style="color: #31308B; text-align: left; font-size: 24px; margin-bottom: 40px;">Last Event Documentation</h2>
    <div class="row">
  <div class="col-md-3 d-flex align-items-center">
    <img src="{{url('./assets/img/2.png')}}" alt="Image" style="max-width: 100%; border-radius: 10px; height: auto;">
  </div>
  <div class="col-md-6 d-flex align-items-center">
    <div class="video-description">
      <h5>Mariam Tomong (Arr R. Mc. Neil) - Gita Suara Kesatuan</h5>
      <p style="font-size: 12px;">Festival Seni Pertunjukan Indonesia (FSPI) Universitas Negeri Yogyakarta 2023<br>Asal Instansi: Institut Bisnis dan Informatika Kesatuan<br>Kategori: Paduan Suara<br>Judul Lagu: Mariam Tomong<br>#FSPIUNY2023 #FSPI2023 #PADUANSUARA #GITASUARAKESATUAN #Harpas2023</p>
    </div>
  </div>
</div>


    <div class="row justify-content-center" style="margin-top:40px; margin-bottom:  20px;">
    <div class="col-md-2">
      <img src="{{url('./assets/img/1.png')}}" alt="Image 1" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/2.png')}}" alt="Image 2" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/4.png')}}" alt="Image 3" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/5.png')}}" alt="Image 4" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/6.png')}}"alt="Image 5" style="width: 100%; border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/7.png')}}" alt="Image 6" style="width: 100%; border-radius: 10px" class="image" />
    </div>
  </div>
  </div>
</div>

@endsection


