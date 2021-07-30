<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/img/apple-icon.png') }}">
      <link rel="icon" type="image/png" href="{{ asset('frontend/img/favicon.png') }}">
      <title>
        Soft UI Design System by Creative Tim
      </title>
      <!--    HEAD & CSS STYLE     -->
      @include('layouts.style')
      <style>
        body {
          width: 100%;
          background-color: #262626;
          font-family: "Poppins";
        }
        header .bg-gradient-dark, span.bg-gradient-dark{
          background-image: linear-gradient(310deg, #424242 0%, #000000 100%) !important
        }
        .text-grey {
          color: #999999 !important;
        }
        .featurer {
          padding: 74px 0px;
        }
        .featurer h5{
          font-size: 16px;
          line-height: 72px;
          color: #ffffff;
          font-weight: 600;
        }
        p{
          font-size: 14px;
          line-height: 30px;
          color: #cccccc;
          font-weight: 400;
        }
      .call-to-action {
        width: 1170px;
        height: 550px;
        border-radius: 30px;
        filter: drop-shadow(0px 50px 35px rgba(0,11,40,0.24));
        background-color: #bfbfbf;
        margin-bottom: 80px;
        }
        .bg-call {
          width: 100%;
          height: 695px;
          padding: 74px 0px;
          margin-bottom: 171px;
          background-color: #1a1a1a;
        }
        .bg-call h3 {
          font-size: 36px;
        line-height: 60px;
        color: #ffffff;
        font-weight: 700;
        }
        .contact-btn, .read-more {
          width: 205px;
          font-size: 14px;
          letter-spacing: 1px;
          color: #ffffff;
          margin-bottom: 74px;
          font-weight: 700;
          font-family: "Montserrat";
        }
        .our-story-img {
        }
        header {
          width: 100%;
          height: 100vh;
          max-height: 100vh;
        }
        header h1 {
          font-size: 100px;
          letter-spacing: 5px;
          line-height: 130px;
          font-weight: 700;
        }
        .page-header-overlay {
          background-color: #000000bf;

          background-size: 100%;
          opacity: .7;
        }
 
        .story-img-box-1 {
          position: absolute;
          top: 55px;
          width: 430px;
          height: 362px;
          border-radius: 30px;
          background-image: linear-gradient(-52deg, #f76f61 0%, #9b23e9 100%);
        }
        .story-img-box-2 {
          position: absolute;
          top: 0;
          left: 0;
          width: 362px;
          height: 465px;
          border-radius: 30px;
          background-color: #eeeeee;
          overflow: hidden;
        }
        .icon-shape i{
          font-size: 48px;
          letter-spacing: 1px;
        }
        .story-about-2 {
          margin-top: 140px;
        }
        .story-about-2 .story-2-img {
          width: 600px;
          height: 400px;
          border-radius: 30px;
          filter: drop-shadow(0px 50px 35px rgba(0,11,40,0.24));
          background-color: #aaaaaa;
        }
        .number {
          margin-top: 74px;
          width: 100%;
          height: 440px;
        }
        .card-blog img {
          height: 431px;
        }
        .latest-blog {
          margin-top: 74px;
        }
        .subscription {
          width: 100%;
          background-color: #000000;
        }
        .input-group input{
          border-bottom-left-radius: 1.875rem;
          border-top-left-radius: 1.875rem;
        }
      </style>
    </head>
<body class="index-page">
  <!-- Navbar -->
        <!--  Navbar  -->
        @include('layouts.navbar')
        <!-- End Navbar -->
        @yield('content')
<header class="" style="background-image: url('{{ asset('frontend/img/meeting.jpg') }}">
  @foreach ($ph_data as $object)
      <div class="page-header section-height-100" style="background-image: url('{{ url ("storage/".$object->image) }}');">
    <span class="mask bg-gradient-dark opacity-5"></span>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center mx-auto my-auto mt-5 pt-5">
          <h1 class="text-white pt-5 mt-n5 m-auto text-bolder">{{ $object->title }}</h1>
          <a href="{{ route('contact-us') }}" class="btn text-white bg-gradient-primary btn-round contact-btn mt-3">{{ $object->btn_text }}</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach

</header>
  <div class="featurer">
      <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-sm">
        <img src="{{ asset('frontend/img/illustrations/fe-3.png')}}" alt="">
          <h5>Fermentum</h5>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere.</p>
      </div>
      <div class="col-sm">
        <img src="{{ asset('frontend/img/illustrations/fe-2.png')}}" alt="">
        <h5>Parturient Dolor</h5>
        <p>Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, </p>
      </div>
      <div class="col-sm">
        <img src="{{ asset('frontend/img/illustrations/fe-1.png')}}" alt="">
          <h5>Nibh Risus</h5>
        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.</p>
      </div>
    </div>
  </div>
  </div>

    <div class="bg-call">  
      <div class="container">
        <div class="justify-content-center text-center">
            <h3>Our Services for You</h3>
            <p>Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
            <a class="btn bg-gradient-primary contact-btn" href="{{ route ('services') }}">Contact Us</a>
            <img src="{{ asset('frontend/img/nastuh.jpg') }}" class="img-fluid border-radius-lg call-to-action">
        </div>
    </div>
    </div>
  

  <section class="pt-lg-7 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-12  order-1 order-md-1 order-lg-1">
          <div class="p-3 pt-0">
            <h2 class="text-white">Our Story</h2>
            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="row justify-content-left">
              <div class="col-md-6">
                <div class="info">
                  <div class="row">
                    <div class="col-lg-3 col-md-4">
                      <div class="icon icon-shape text-center">
                           <i class="fas fa-braille text-gradient text-primary"></i>
                       </div> 
                    </div>
                    <div class="col-lg-9">
                          <h5 class="text-white">Cras Sem</h5>
                          <p>Errem meliore vive an quem electram eos.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon icon-shape text-center">
                            <i class="fas fa-chart-line text-gradient text-primary"></i>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h5 class="text-white">Parturient </h5>
                        <p>Errem meliore vive an quem electram eos.</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="row justify-content-left">
              <div class="col-md-6">
                <div class="info">
                  <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon icon-shape text-center">
                            <i class="fas fa-pencil-ruler text-gradient text-primary"></i>
                        </div>
                    </div>
                    <div class="col-lg-9">
                      <h5 class="text-white">Venenatis Dolor</h5>
                      <p>Errem meliore vive an quem electram eos.</p>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <div class="row">
                    <div class="col-lg-3 col-md-4">
                      <div class="icon icon-shape text-center">
                        <i class="fas fa-project-diagram text-gradient text-primary"></i>
                      </div>
                    </div>  
                    <div class="col-lg-9">
                        <h5 class="text-white">Dolor Amet</h5>
                        <p>Errem meliore vive an quem electram eos.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 order-2 order-md-2 order-lg-1">
          <div class="our-story-img position-relative">
            <div class="story-img-box-1  border-radius-xl" alt=""></div>
            <div class="story-img-box-2 border-radius-xl" alt="">
              <img src="{{ asset('frontend/img/andrew-neel.jpg') }}" class="img-fluid w-100 h-100 border-radius-lg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>    
  <section class="story-about-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 p-0 story-2-img mx-auto">
          <img src="{{ asset('frontend/img/annie-spratt.jpg') }}" alt="" class="img-fluid w-100 h-100 border-radius-lg">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
          <h2 class="text-white">About Us</h2>
          <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu quam ac nisl iaculis feugiat at at mol metus. Ulmi Donec ex ac,
          </p>
          <a href="{{ route('about-us') }}" class="read-more btn bg-gradient-primary">read more</a>
        </div>
      </div>
    </div>
    
  </section>        

 <section class="number">
 <div class="page-header" style="height:100%; background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/team-working.jpg');">
  <span class="mask bg-gradient-primary"></span>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-3 position-relative">
        <div class="p-3 text-center">
          <h1 class="text-white" id="state1" countto="564">564</h1>
          <h5 class="mt-3 text-white">projects</h5>
        </div>
      </div>
      <div class="col-md-3 position-relative">
        <div class="p-3 text-center">
          <h1 class="text-white" id="state2" countto="69">69</h1>
          <h5 class="mt-3 text-white">Photos</h5>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-3 text-center">
          <h1 class="text-white" id="state3" countto="564">564</h1>
          <h5 class="mt-3 text-white">projects</h5>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-3 text-center">
          <h1 class="text-white" id="state4" countto="69">69</h1>
          <h5 class="mt-3 text-white">Photos</h5>
        </div>
      </div>
  </div>
  </div>
</div>
</section>


<section class="latest-blog justify-content-center text-center">
  <h2 class="text-white pt-4 mb-5">Our Blog</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain card-blog mt-3">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="{{ asset('frontend/img/alexandre-trouve.jpg') }}">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-white font-weight-bold">Ornare Elit</a>
              </h5>
              <p>Business</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="{{ asset('frontend/img/linkedin-sales-solutions.jpg') }}">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-white font-weight-bold">Egestas Bibendum</a>
              </h5>
              <p>Consultance</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="{{ asset('frontend/img/agefis.jpg') }}">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-white font-weight-bold">Parturient Venenatis</a>
              </h5>
              <p>Business</p>
            </div>
          </div>
        </div>
      </div>
    </div>

</section>
  
  <section class="subscription mt-5 justify-content-center text-center" style="background-size:cover; background-image: url('{{ asset('frontend/img/leon-vbxyFxlgpjM-unsplash.jpg')}}');">
      <div class="page-header pb-8 pt-8">
       <span class="mask bg-gradient-dark"></span>
       <div class="container">
         <div class="row justify-content-center text-center">
          <h2 class="text-white">Subscribe to Our Newsletter</h2>
      <div class="input-group mt-4 w-70 m-auto">
        <input type="text" class="form-control form-control-lg" placeholder="Your e-mail" aria-label="Your e-mail" aria-describedby="button-addon2">
        <button class="btn btn-round read-more bg-gradient-primary mb-0" type="button" id="button-addon2">SUBSCRIBE</button>
      </div>
      <p class="mt-4">Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    </div>
       </div>

    </div>
    
      
  </section>

  <!--  Footer   -->
    @include('layouts.footer')
  <!--   JS Files   -->
  @include('layouts.script')
</body>

</html>
