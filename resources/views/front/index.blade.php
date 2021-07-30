@extends('app')
@section('title') {{__('Home ')}} @endsection
@section('content')
@push('styles')
<style>

</style>
@endpush
 

<header class="" style="background-image: url('{{ asset('front/img/meeting.jpg') }}">
  @forelse($pgheader as $object)
    <div class="page-header section-height-100" style="background-image: url('{{ url ("storage/".$object->image) }}');">
      <span class="mask bg-gradient-dark opacity-5"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto mt-5 pt-5">
            <h1 class="text-white pt-5 mt-n5 m-auto text-bolder">{{ $object->title }}</h1>
            <a href="{{ route('contact') }}" class="btn text-white bg-gradient-primary btn-round contact-btn mt-3">{{ $object->text_btn }}</a>
          </div>
        </div>
      </div>
    </div>
  @empty
  <div class="page-header section-height-100" style="background-image: url('{{ url ("storage/".$object->image) }}');">
    <span class="mask bg-gradient-dark opacity-5"></span>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center mx-auto my-auto mt-5 pt-5">
          <h1 class="text-white pt-5 mt-n5 m-auto text-bolder">We Provide Services</h1>
          <a href="{{ route('contact') }}" class="btn text-white bg-gradient-primary btn-round contact-btn mt-3">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
  @endforelse
</header>

<div class="featurer">
      <div class="container">
    <div class="row justify-content-center text-center">
      @forelse($features as $feat)
        <div class="col-sm">
          <img src="" alt="">
          <h5>{{ $feat->title }}</h5>
          <p>{{ $feat->description }}</p>
          @empty
          <div class="col-sm">
            <img src="{{ asset('front/img/illustrations/fe-3.png')}}" alt="">
              <h5>Fermentum</h5>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere.</p>
          </div>
          <div class="col-sm">
            <img src="{{ asset('front/img/illustrations/fe-2.png')}}" alt="">
            <h5>Parturient Dolor</h5>
            <p>Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, </p>
          </div>
          <div class="col-sm">
            <img src="{{ asset('front/img/illustrations/fe-1.png')}}" alt="">
              <h5>Nibh Risus</h5>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.</p>
          </div>
        </div>
      @endforelse
    </div>
  </div>
  </div>

  <div class="bg-call">  
    <div class="container">
      <div class="justify-content-center text-center">
          <h3>Our Services for You</h3>
          @forelse ($landing as $lan)
             <p>{{ $lan->our_services }}</p>
             <a class="btn bg-gradient-primary contact-btn" href="{{ route ('services') }}">{{ $lan->our_services_btn }}</a>
             <img  class="img-fluid border-radius-lg call-to-action">
          @empty
            <a class="btn bg-gradient-primary contact-btn" href="{{ route ('services') }}">Contact Us</a>
            <img src="{{ asset('front/img/nastuh.jpg') }}" class="img-fluid border-radius-lg call-to-action">
          @endforelse
      </div>
    </div>
  </div>

  <section class="pt-lg-7 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-12  order-1 order-md-1 order-lg-1">
          <div class="p-3 pt-0">
            <h2 class="text-white">Our Story</h2>
            @forelse($about as $abt)
              <p>{{ $abt->story_description }}</p>
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
                            <h5 class="text-white">{{ $abt->title_1 }}</h5>
                            <p>{{ $abt->short_text_1 }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @empty
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
            @endforelse
          </div>
        </div>
        <div class="col-lg-4 col-md-5 order-2 order-md-2 order-lg-1">
          <div class="our-story-img position-relative">
            <div class="story-img-box-1  border-radius-xl" alt=""></div>
            <div class="story-img-box-2 border-radius-xl" alt="">
              <img src="{{ asset('front/img/andrew-neel.jpg') }}" class="img-fluid w-100 h-100 border-radius-lg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>    

  <!-- End | Our Stroy -->
  <section class="story-about-2">
    <div class="container">
      <div class="row">          
        @forelse ($landing as $lan)
          <div class="col-lg-8 col-md-8 col-sm-12 p-0 story-2-img mx-auto">
            <img  class="img-fluid w-100 h-100 border-radius-lg">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
              <h2 class="text-white">About Us</h2>
              <p class="lead">{{ $lan->about_us }}</p>
              <a href="{{ route('about-us') }}" class="read-more btn bg-gradient-primary">{{ $lan->about_us_btn }}</a>
          @empty
          <div class="col-lg-8 col-md-8 col-sm-12 p-0 story-2-img mx-auto">
            <img src="{{ asset('front/img/annie-spratt.jpg') }}" alt="" class="img-fluid w-100 h-100 border-radius-lg">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
              <h2 class="text-white">About Us</h2>
              <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu quam ac nisl iaculis feugiat at at mol metus. Ulmi Donec ex ac,
              </p>
              <a href="{{ route('about-us') }}" class="read-more btn bg-gradient-primary">read more</a>
          @endforelse
        </div>
      </div>
    </div>
  </section>   
  <!-- End | About Us -->

  <section class="number">
    <div class="page-header" style="height:100%; background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/team-working.jpg');">
     <span class="mask bg-gradient-primary"></span>
     <div class="container">
       <div class="row justify-content-center text-center text-uppercase">
        @forelse ( $landing as $achiev )
          <div class="col-md-3 position-relative ">
            <div class="p-3 text-center">
              <h1 class="text-white" id="state1" countto="{{ $achiev->achievements_num_1  }}">{{ $achiev->achievements_num_1  }}</h1>
              <h5 class="mt-3 text-white">{{ $achiev->achievements_name_1 }}</h5>
            </div>
          </div>
          <div class="col-md-3 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-white" id="state2" countto="{{ $achiev->achievements_num_2 }}">{{ $achiev->achievements_num_2 }}</h1>
              <h5 class="mt-3 text-white">{{ $achiev->achievements_name_2 }}</h5>
            </div>
          </div>
          <div class="col-md-3">
            <div class="p-3 text-center">
              <h1 class="text-white" id="state3" countto="{{ $achiev->achievements_num_3 }}">{{ $achiev->achievements_num_3 }}</h1>
              <h5 class="mt-3 text-white">{{ $achiev->achievements_name_3 }}</h5>
            </div>
          </div>
          <div class="col-md-3">
            <div class="p-3 text-center">
              <h1 class="text-white" id="state4" countto="{{ $achiev->achievements_num_4 }}">{{ $achiev->achievements_num_4 }}</h1>
              <h5 class="mt-3 text-white">{{ $achiev->achievements_name_4 }}</h5>
            </div>
          </div> 
        @empty        
          <div class="col-md-3 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-white" id="state1" countto="564">564</h1>
              <h5 class="mt-3 text-white text-uppercase">projects</h5>
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
          @endforelse
         </div> 
      </div>
   </div>
   </section>
     <!-- End | Achievements -->

     <section class="latest-blog justify-content-center text-center">
      <h2 class="text-white pt-4 mb-5">Our Blog</h2>
        <div class="container">
          <div class="row">
            @forelse ( $blog as $blog )
            <div class="col-lg-4 col-sm-6">
              <div class="card card-plain card-blog mt-3">
                <div class="card-image border-radius-lg position-relative">
                  <a href="{{ route('single-article', $blog->id ) }}">
                    <img class="w-100 border-radius-lg move-on-hover shadow" src="{{ asset('front/img/alexandre-trouve.jpg') }}">
                  </a>
                </div>
                <div class="card-body px-0 mt-3">
                  <h5>
                    <a href="{{ route('single-article', $blog->id ) }}" class="text-white font-weight-bold">{{ $blog->title }}</a>
                  </h5>
                  <p>{{ strip_tags(Illuminate\Support\Str::limit($blog->body, $limit = 120, $end = " ")) }}
                    <a href="{{  route('single-article', $blog->id ) }}" class="text-primary icon-move-right text-sm">See More...
                      <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
            @empty
            <div class="col-lg-4 col-sm-6">
              <div class="card card-plain card-blog mt-3">
                <div class="card-image border-radius-lg position-relative">
                  <a href="javascript:;">
                    <img class="w-100 border-radius-lg move-on-hover shadow" src="{{ asset('front/img/alexandre-trouve.jpg') }}">
                  </a>
                </div>
                <div class="card-body px-0">
                  <h5>
                    <a href="javascript:;" class="text-white font-weight-bold">Ornare Elit</a>
                  </h5>
                  <p>Business at lectus urna duis convallis</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="card card-plain card-blog">
                <div class="card-image border-radius-lg position-relative">
                  <a href="javascript:;">
                    <img class="w-100 border-radius-lg move-on-hover shadow" src="{{ asset('front/img/linkedin-sales-solutions.jpg') }}">
                  </a>
                </div>
                <div class="card-body px-0 mt-3">
                  <h5>
                    <a href="javascript:;" class="text-white font-weight-bold">Egestas Bibendum</a>
                  </h5>
                  <p>Consultance sagittis eu volutpat odio facilisis</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="card card-plain card-blog">
                <div class="card-image border-radius-lg position-relative">
                  <a href="javascript:;">
                    <img class="w-100 border-radius-lg move-on-hover shadow" src="{{ asset('front/img/agefis.jpg') }}">
                  </a>
                </div>
                <div class="card-body px-0 mt-3">
                  <h5>
                    <a href="javascript:;" class="text-white font-weight-bold">Parturient Venenatis</a>
                  </h5>
                  <p>Business placerat orci nulla pellentesque dignissim</p>
                </div>
              </div>
            </div>
            @endforelse

          </div>
        </div>
    </section>
    <!-- End | Blog -->

    <section class="subscription mt-5 justify-content-center text-center" style="background-size:cover; background-image: url('{{ asset('front/img/leon-vbxyFxlgpjM-unsplash.jpg')}}');">
      <div class="page-header pb-8 pt-8">
       <span class="mask bg-gradient-dark"></span>
       <div class="container">
         <div class="row justify-content-center text-center">
          <h2 class="text-white">Subscribe to Our Newsletter</h2>
          @if (session('subscribed'))
          <div class="alert alert-success">
              {{ session('subscribed') }}
          </div>
          @endif   
      <form class="input-group mt-4 w-70 m-auto" action="{{ route('subscribers.store') }}" method="POST">
        @csrf
        <input type="email" name="email" class="form-control form-control-lg pl-3" placeholder="Your e-mail" aria-label="Your e-mail" aria-describedby="button-addon2">
        <button class="btn btn-round read-more bg-gradient-primary mb-0" type="submit" id="button-addon2">SUBSCRIBE</button>
      </form>
      @forelse ($landing as $news)
        <p class="mt-4">{{ $news->newsletter_desc }}</p>
      @empty
        <p class="mt-4">Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
      @endforelse
    </div>
       </div>
    </div>
  </section>
    <!-- End | Newsletter -->

 



  @endsection