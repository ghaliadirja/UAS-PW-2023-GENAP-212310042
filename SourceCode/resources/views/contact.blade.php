@extends('templates.layouts')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 col-xxl-10">
      <h1 class="text-center text-md-left" style="font-size: 48px; color: #31308B;">Contact Us</h1>
      <p class="text-center text-md-left" style="font-size: 16px; color: gray;">Got any questions or inquiries? Feel free to get in touch with us</p>

      <div class="card shadow" style="box-shadow: 0 1px 1px rgba(0, 0, 0, 0.5); margin-bottom: 40px; margin-top: 40px;">
        <div class="card-body">
          <div class="container-fluid">
            <div class="row" style="padding: 32px; display: flex; align-items: stretch; vertical-align: center;">
              <div class="col-md-4 col-sm-12 mb-4">
                <div class="card h-100" style="padding: 32px;">
                  <div class="d-flex flex-column align-items-center align-items-md-start">
                    <p class="text-margin text-center text-md-left" style="font-size: 20px; color: black;">Feel Free to Contact Our Community</p>
                    <a href="https://www.instagram.com/harpas.kst/" target="_blank" style="padding-bottom: 8px; text-decoration: none;">
                      <img src="{{url('./assets/img/instagram-logo.png')}}" alt="Instagram" style="width: 30px; height: 30px; margin-right: 4px; opacity: 0.7;">
                      <span class="text-margin" style="font-size: 16px; color: gray;">@harpas.kst</span>
                    </a>
                    <a href="https://www.youtube.com/@harpaskesatuan1456" target="_blank" style="padding-bottom: 8px; text-decoration: none;">
                      <img src="{{url('./assets/img/youtube-logo.png')}}" alt="YouTube" style="width: 30px; height: 30px; margin-right: 4px; opacity: 0.7;">
                      <span class="text-margin" style="font-size: 16px; color: gray;">Harpas Kesatuan</span>
                    </a>
                    <a href="https://www.instagram.com/harpas.kst/" target="_blank" style="padding-bottom: 8px; text-decoration: none;">
                      <img src="{{url('./assets/img/whatsapp-logo.png')}}" alt="WhatsApp" style="width: 30px; height: 30px; margin-right: 4px; opacity: 0.7;">
                      <span class="text-margin" style="font-size: 16px; color: gray;">0851-5682-3895</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="h-100">
                  <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.536019861436!2d106.7892862197753!3d-6.605239395301828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c191f0a555%3A0xe6e757cf32829f41!2sIBI%20KESATUAN%20BOGOR!5e0!3m2!1sen!2sid!4v1623911143930!5m2!1sen!2sid"
                    height="92%" width="100%" style="border-radius:10px;border: 1px black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>












<!-- <div class="mx-auto d-flex justify-content-center">
  <div style="max-width: 90%; margin-left: 20px; margin-right: 20px;">
    <img src="{{url('./assets/img/contactbanner.png')}}" class="img-fluid rounded-20" alt="">
  </div>
</div>
<div class="container-fluid justify-content-center">
  <div class="row" style="padding-top: 40px; margin-bottom: 60px">
    <div class="col-md-4 col-sm-12" style="margin-left: 56px;">
      <div class="card border-secondary mb-3 h-100" style="padding: 40px;">
        <div class="d-flex flex-column align-items-start">
          <p class="text-margin" style="font-size: 28px; color: black;">Feel Free to Contact Our Community</p>
          <a href="https://www.instagram.com/harpas.kst/" target="_blank">
            <img src="{{url('./assets/img/instagram-logo.png')}}" alt="Instagram" style="width: 40px; height: 40px; margin-right: 10px;">
            <span class="text-margin" style="font-size: 24px; color: gray;">@harpas.kst</span>
          </a>
          <a href="https://www.youtube.com/@harpaskesatuan1456" target="_blank">
            <img src="{{url('./assets/img/youtube-logo.png')}}" alt="Instagram" style="width: 40px; height: 40px; margin-right: 10px;">
            <span class="text-margin" style="font-size: 24px; color: gray;">Harpas Kesatuan</span>
          </a>
          <a href="https://www.instagram.com/harpas.kst/" target="_blank">
            <img src="{{url('./assets/img/whatsapp-logo.png')}}" alt="Instagram" style="width: 40px; height: 40px; margin-right: 10px;">
            <span class="text-margin" style="font-size: 24px; color: gray;">0851-5682-3895</span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-7">
        <div class="" style="height:400px;">
        <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.536019861436!2d106.7892862197753!3d-6.605239395301828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c191f0a555%3A0xe6e757cf32829f41!2sIBI%20KESATUAN%20BOGOR!5e0!3m2!1sen!2sid!4v1623911143930!5m2!1sen!2sid"
        height=100% width=100% style="border-radius:10px;border: 1px black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      </div>
    </div>
  </div>
</div> -->

@endsection
