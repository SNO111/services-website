@extends('app')
@section('title') {{__('Sevices')}} @endsection
@section('content')
<!-- -------- START Features w/ title and 3 infos -------- -->

<section class="py-9">
    <div class="container twxt">
      <div class="row">
        <div class="col-lg-9 mx-auto text-center pb-4">
          <h2 class="text-white text-primary">Turn your idea into reality</h2>
          @if ($servlan)
            <p class="lead">{!! $servlan !!}</p>
          @else
          <p class="lead">We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play </p>
          @endif
        </div>
      </div>
      <div class="row">
          @forelse ($services as $serv )
          <div class="col-lg-4 col-md-6">
            <div class="p-3 text-center">
                <div class="icon icon-shape bg-gradient-primary shadow mx-auto">
                    <i class="ni ni-single-02"></i>
                </div>
                <h5 class="mt-4 text-white">{{ $serv->title }}</h5>
                <p>{{ $serv->services_desc }}</p>
                <a href="javascript:;" class="text-primary icon-move-right text-sm">{{ $serv->services_btn }}
                    <i class="fas fa-arrow-right text-xs ms-1"></i>
                </a>
            </div>
            </div>
          @empty 
            <div class="col-lg-4 col-md-6">
            <div class="p-3 text-center">
                <div class="icon icon-shape bg-gradient-primary shadow mx-auto">
                <i class="ni ni-single-02"></i>
                </div>
                <h5 class="mt-4">Check our team</h5>
                <p>We get insulted by others, lose trust for those others. We get back here to follow my dreams</p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
            <div class="p-3 text-center">
                <div class="icon icon-shape bg-gradient-info shadow mx-auto">
                <i class="ni ni-email-83"></i>
                </div>
                <h5 class="mt-4">Support 24/7</h5>
                <p>We get insulted by others, lose trust for those others. We get back here to follow my dreams</p>
                <a href="javascript:;" class="text-primary icon-move-right text-sm">Learn More
                    <i class="fas fa-arrow-right text-xs ms-1"></i>
                </a>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 mx-md-auto">
            <div class="p-3 text-center">
                <div class="icon icon-shape bg-gradient-warning shadow mx-auto">
                <i class="ni ni-atom"></i>
                </div>
                <h5 class="mt-4">Unlimited revisions</h5>
                <p>We get insulted by others, lose trust for those others. We get back here to follow my dreams</p>
            </div>
            </div>
        @endforelse
      </div>
    </div>
  </section>
  <!-- -------- END Features w/ title and 3 infos -------- -->


@endsection