@extends('templates.layouts')
@section('content')
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
<div class="container">
  <div class="row justify-content-center">
    <div class="mx-auto" >
      <h1 class="text-center text-md-left" style="font-size: 48px; color: #31308B;">Music Division</h1>
      <p class="text-center text-md-left" style="font-size: 16px; color: gray; margin-bottom: 44px;">UKM Harmoni Penggiat Seni Kesatuan Bogor</p>
    </div>
  </div>
  <div class="container">
  <div class="mx-auto d-flex justify-content-center" style="margin-bottom: 44px;">
    <div style="max-width: 100%;">
      <img src="{{url('./assets/img/19.png')}}" class="img-fluid rounded-10" alt="" style="border-radius: 10px; width 500px">
    </div>
  </div>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non orci elementum lorem dictum suscipit. Curabitur sagittis aliquet felis, id efficitur urna imperdiet et. Cras mollis, massa quis porttitor faucibus, nibh augue lacinia orci, ut ornare odio orci ac turpis. In hac habitasse platea dictumst. Donec sit amet tempor enim, et sollicitudin augue. Ut ac eleifend lacus. Suspendisse et quam eu nibh dignissim efficitur. In consequat lectus libero, sit amet tristique leo tempor a. Fusce id diam luctus sapien aliquam semper. Phasellus aliquam libero et consectetur efficitur. Vestibulum nisi libero, egestas eu ipsum vel, consectetur maximus erat. Proin facilisis nunc id lobortis lobortis.<br><br>

Mauris et odio interdum, interdum tellus quis, efficitur velit. Nullam pulvinar nunc enim, a iaculis libero tempus et. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse mollis diam eget purus blandit, ac ultricies justo vehicula. Vivamus rhoncus nisi sit amet sapien rutrum tempus. Curabitur ac cursus mi. In et nulla sit amet turpis pellentesque dapibus et et metus. Fusce non metus vulputate, sagittis dolor a, pharetra dolor. Pellentesque non velit eget erat hendrerit cursus. Curabitur pellentesque gravida tempus. Fusce aliquam dolor nec lacus laoreet hendrerit. Maecenas lacinia at sapien a consequat.<br><br></p>

</div>
<div class="mx-auto" style="max-width: 100%;  margin-bottom:44px;">
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
</div> 


@endsection