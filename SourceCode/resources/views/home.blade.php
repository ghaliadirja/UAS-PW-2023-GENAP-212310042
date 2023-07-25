@extends('templates.layouts')
@section('content')
<!-- coursel -->
<style>
.catalog {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.catalog-item {
    width: 19%;
    margin-bottom: 20px;
    margin-right: 10px;
    padding-left: 10px;
}

.catalog-item img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 20px;
}

.catalog-item h3,
.catalog-item p {
    font-size: 14px;
}

.image {
    transition: transform 0.3s;
}

.image:hover {
    transform: scale(1.1);
}

@media (max-width: 992px) {
    .catalog-item {
        width: 23%;
    }
}

@media (max-width: 768px) {
    .catalog-item {
        width: 48%;
    }
}

@media (max-width: 480px) {
    .catalog-item {
        width: 100%;
    }
}

@media (max-width: 576px) {
    .carousel-container {
        margin-left: 10px;
        margin-right: 10px;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .carousel-container {
        margin-left: 20px;
        margin-right: 20px;
    }
}

@media (min-width: 769px) and (max-width: 992px) {
    .carousel-container {
        margin-left: 30px;
        margin-right: 30px;
    }
}

@media (min-width: 993px) {
    .carousel-container {
        margin-left: 80px;
        margin-right: 80px;
    }
}
</style>

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

<div class="mx-auto" style="max-width: 90%; margin-top: 48px;">
  <div class="row justify-content-center">
  <h2 style="color: #31308B; text-align: left; font-size: 24px; margin-bottom: 20px;">Why Us?</h2>
    <div class="col-md-6">
      <img src="{{url('./assets/img/about.jpeg')}}" class="img-fluid rounded-10" alt="" style="border-radius: 10px; width: 100%;">
    </div>
    <div class="col-md-6">
      <p>Harpas Kesatuan is an experienced organization that provides a diverse range of arts and cultural services. They have a deep understanding of arts and culture and have been involved in various art projects. With their expertise and experience, Harpas Kesatuan can understand and meet clients' needs in delivering quality art services. With a focus on music, dance, theater, visual arts, and other art disciplines, Harpas Kesatuan ensures that clients can explore various types of art according to their desires. When it comes to arts and cultural services, Harpas Kesatuan is the right choice to fulfill your creative needs.</p>
    </div>
  </div>
</div>
<div class="mx-auto" style="max-width: 90%; margin-top: 40px;">
  <h2 style="color: #31308B; text-align: left; font-size: 24px; margin-bottom: 20px;">Our Division</h2>
  <div class="row justify-content-center">
    <div class="col-md-2 mb-4">
      <div style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <img src="{{url('./assets/img/music.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px;">Music Division</p>
    </div>
    <div class="col-md-2 mb-4">
      <div style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <img src="{{url('./assets/img/dances.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px;">Tradisional Modern Dance Division</p>
    </div>
    <div class="col-md-2 mb-4">
      <div style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <img src="{{url('./assets/img/choir.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px;">Choir Division</p>
    </div>
    <div class="col-md-2 mb-4">
      <div style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <img src="{{url('./assets/img/arts.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px;">Art Division</p>
    </div>
    <div class="col-md-2 mb-4">
      <div style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <img src="{{url('./assets/img/photography.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px;">Photography Division</p>
    </div>
    <div class="col-md-2 mb-4">
      <div style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <img src="{{url('./assets/img/theater.png')}}" class="img-fluid rounded-10" alt="" style="width: 100%;">
      </div>
      <p class="text-center" style="font-size: 16px; color: #31308B; margin-top: 10px;">Theater Division</p>
    </div>
  </div>
</div>
<div class="mx-auto" style="max-width: 90%; margin-top: 40px;">
  <h2 style="color: #31308B; text-align: left; font-size: 24px; margin-bottom: 20px;">Services Katalog</h2>
  <div class="row justify-content-center">
  <div class="catalog">
  <div class="catalog-item" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
    <img src="{{url('./assets/img/music.png')}}" alt="Item 1">
    <h3 style="color: #31308B;">Music</h3>
    <p>Our service:</p>
    <p style="color: gray;">Graduation<br> Event Corporate <br> Wedding Organizer <br> Live Music Coffer Shop <br></p>
</div>

<div class="catalog-item" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <img src="{{url('./assets/img/theater.png')}}" alt="Item 2">
        <h3 style="color: #31308B;">Theater</h3>
        <p>Our service:</p>
        <p style="color: gray;">Graduation<br> Event Corporate <br></p>
    </div>
    <div class="catalog-item" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <img src="{{url('./assets/img/arts.png')}}" alt="Item 3">
        <h3 style="color: #31308B;">Art Painting</h3>
        <p>Our service:</p>
        <p style="color: gray;">Mural Art<br> Painting Canvas <br></p>
    </div>
    <div class="catalog-item" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <img src="{{url('./assets/img/photography.png')}}" alt="Item 4">
        <h3 style="color: #31308B;">Photography & Videography</h3>
        <p>Our service:</p>
        <p style="color: gray;">Graduation<br> Event Corporate <br> Wedding Organizer <br> Design, Photo <br> Video Years Book School <br></p>
    </div>
    <div class="catalog-item" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
        <img src="{{url('./assets/img/dances.png')}}" alt="Item 5">
        <h3 style="color: #31308B;">Tradisional Modern Dance</h3>
        <p>Our service:</p>
        <p style="color: gray;">Graduation<br> Event Corporate <br> Wedding Organizer <br> </p>
    </div>
</div>

<div class="mx-auto" style="max-width: 100%; margin-top: 40px;">
  <div class="row justify-content-left">
    <h2 style="color: #31308B; text-align: left; font-size: 24px; margin-bottom: 20px;">Our Documentation</h2>
  </div>
  <div class="row justify-content-center">
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
  <div class="row justify-content-center" style="margin-top:20px;">
    <div class="col-md-2">
      <img src="{{url('./assets/img/8.png')}}" alt="Image 1" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/9.png')}}" alt="Image 2" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/10.png')}}" alt="Image 3" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/11.png')}}" alt="Image 4" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/12.png')}}"alt="Image 5" style="width: 100%; border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/13.png')}}" alt="Image 6" style="width: 100%; border-radius: 10px" class="image" />
    </div>
  </div>
  <div class="row justify-content-center" style="margin-top:20px;">
    <div class="col-md-2">
      <img src="{{url('./assets/img/14.png')}}" alt="Image 1" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/15.png')}}" alt="Image 2" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/16.png')}}" alt="Image 3" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/17.png')}}" alt="Image 4" style="width: 100%;border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/18.png')}}"alt="Image 5" style="width: 100%; border-radius: 10px" class="image" />
    </div>
    <div class="col-md-2">
      <img src="{{url('./assets/img/3.png')}}" alt="Image 6" style="width: 100%; border-radius: 10px" class="image" />
    </div>
  </div>
</div>
<!-- quotes -->
<div class="mx-auto d-flex justify-content-center" style="padding-bottom: 40px";>
    <div class="row">
        <div class="col-md-11 text-center">
            <h1 class="text-margin" style="color: #1E1E1E; text-align: center; margin-top: 40px;"><i>“Life is too short to paint something <br> you don’t have feeling for”</i></h1>
        </div>
    </div>
</div>


@endsection


