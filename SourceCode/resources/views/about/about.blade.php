@extends('templates.layouts')
@section('content')
<style>
  /* styles.css */

.image-container {
  position: relative;
  overflow: hidden;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.image-container:hover .overlay {
  opacity: 1;
}

.overlay:hover {
  cursor: pointer;
}

</style>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 col-xxl-10">
      <h1 class="text-center text-md-left" style="font-size: 48px; color: #31308B;">HARPAS KESATUAN</h1>
      <p class="text-center text-md-left" style="font-size: 16px; color: gray;">UKM Harmoni Penggiat Seni Kesatuan Bogor</p>
    </div>
  </div>
  <div class="container">
  <div class="mx-auto d-flex justify-content-center" style="margin-bottom: 44px;">
    <div style="max-width: 100%; margin-left: 16px; margin-right: 16px;">
      <img src="{{url('./assets/img/about.jpeg')}}" class="img-fluid rounded-10" alt="" style="border-radius: 10px; width 300px">
    </div>
  </div>
  
  <h2 style="color: #31308B; text-align: left; font-size: 24px; margin-bottom: 20px;">Our History</h2>
  <p class="text-md-left" style="font-size: 16px; color: gray; text-align: justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
  
  <h2 style="color: #31308B; text-align: left; font-size: 24px; margin-bottom: 20px;">Vision & Mission</h2>
  <p class="text-md-left" style="font-size: 16px; color: gray; text-align: justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <br> </p>
  <p class="text-md-left" style="font-size: 16px; color: gray; text-align: justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
  
  <div class="mx-auto" style="max-width: 100%; margin-top: 40px;">
  <h2 style="color: #31308B; text-align: left; font-size: 24px; margin-bottom: 20px;">Our Division</h2>
  <div class="row justify-content-center">
    <div class="col-md-2 mb-4">
      <div class="image-container" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <a href="{{ url('/MusicDivision') }}">
          <img src="{{url('./assets/img/music.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
          <div class="overlay"></div>
        </a>
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px; text-decoration: none;">Music Division</p>
    </div>

    <div class="col-md-2 mb-4">
      <div class="image-container" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <a href="{{ url('/DanceDivision') }}">  
           <img src="{{url('./assets/img/dances.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
           <div class="overlay"></div>
        </a>
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px;">Tradisional Modern Dance Division</p>
    </div>
    <div class="col-md-2 mb-4">
      <div class="image-container" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <a href="{{ url('/ChoirDivision') }}">
          <img src="{{url('./assets/img/choir.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
          <div class="overlay"></div>
        </a>
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px;">Choir Division</p>
    </div>
    <div class="col-md-2 mb-4">
      <div class="image-container" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <a href="{{ url('/ArtDivision') }}">
          <img src="{{url('./assets/img/arts.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
          <div class="overlay"></div>
        </a>
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px;">Art Division</p>
    </div>
    <div class="col-md-2 mb-4">
      <div class="image-container" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <a href="{{ url('/PhotographyDivision') }}">
          <img src="{{url('./assets/img/photography.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
          <div class="overlay"></div>
        </a>
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px;">Photography Division</p>
    </div>
    <div class="col-md-2 mb-4">
      <div class="image-container" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <a href="{{ url('/TheaterDivision') }}">
          <img src="{{url('./assets/img/theater.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
          <div class="overlay"></div>
        </a>
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px;">Theater Division</p>
    </div>
  </div>
</div>

  <h2 style="color: #31308B; text-align: left; font-size: 24px; margin-bottom: 10px;">Our Core Group</h2>
  <div class="row mt-5 justify-content-center text-center mb-5" style="margin-top: 10px;">
  <div class="col-md-2 col-4 mb-4 me-md-0">
    <img src="/assets/img/ketua.svg" alt="Ketua" class="rounded" style="border-radius: 10px; width: 100%; max-width: 150px;"><br>
    <span class="fw-bold mt-3" style="color: gray;">Bagas Ferdiansyah</span><br>
    <span style="color: gray;">Ketua Umum</span>
  </div>
  <div class="col-md-2 col-4 mb-3 me-md-0">
    <img src="/assets/img/wakilketua.svg" alt="Ketua" class="rounded" style="border-radius: 10px; width: 100%; max-width: 150px;"><br>
    <span class="fw-bold mt-3" style="color: gray;">Bella Arika Semeru</span><br>
    <span style="color: gray;">Wakil Ketua Umum</span>
  </div>
  <div class="col-md-2 col-4 mb-4 me-md-0">
    <img src="/assets/img/sekretaris1.svg" alt="Ketua" class="rounded" style="border-radius: 10px; width: 100%; max-width: 150px;"><br>
    <span class="fw-bold mt-3" style="color: gray;">Siti Yasmin Salsabila</span><br>
    <span style="color: gray;">Sekretaris Umum 1</span>
  </div>
  <div class="col-md-2 col-4 mb-4 me-md-0">
    <img src="/assets/img/sekretaris2.svg" alt="Ketua" class="rounded" style="border-radius: 10px; width: 100%; max-width: 150px;"><br>
    <span class="fw-bold mt-3" style="color: gray;">Wanaputri Dwi </span><br>
    <span style="color: gray;">Sekretaris Umum 2</span>
  </div>
  <div class="col-md-2 col-4 mb-1 me-md-0">
    <img src="/assets/img/bendahara1.svg" alt="Ketua" class="rounded" style="border-radius: 10px; width: 100%; max-width: 150px;"><br>
    <span class="fw-bold mt-3" style="color: gray;">Hana Amelia Safitri</span><br>
    <span style="color: gray;">Bendahara Umum 1</span>
  </div>
  <div class="col-md-2 col-4 mb-4 me-md-0">
    <img src="/assets/img/bendahara2.svg" alt="Ketua" class="rounded" style="border-radius: 10px; width: 100%; max-width: 150px;"><br>
    <span class="fw-bold mt-3" style="color: gray;">Feby Analce</span><br>
    <span style="color: gray;">Bendahara Umum 2</span>
  </div>
</div>

@endsection
