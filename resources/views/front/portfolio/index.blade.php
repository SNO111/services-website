@extends('app')
@section('title') {{__('Portfolio') }} @endsection
@push('styles')
<style>

</style>
@endpush
@section('content')
  <section class="py-9">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto text-center pb-4">
            <h1 class="text-white">Our Portfolio</h1>
        </div>
      </div>
      <div class="row">
          @forelse ($portfolio as $port )
            <div class="col-lg-3 col-sm-6">
                <div class="card card-plain card-blog" >
                <div class="card-image border-radius-lg position-relative cursor-pointer">
                    <div class="blur-shadow-image">
                    <img class="img border-radius-lg move-on-hover img-fluid" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-bags.jpg" alt="bags">
                    </div>
                <div class="colored-shadow" style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-bags.jpg&quot;);"></div></div>
                <div class="card-body px-0">
                    <h5>
                    <a href="{{ route('portfolio_projecr', $port->id )}}" class="text-white text-capitalize font-weight-bold">{{ $port->project_name  }}</a>
                    </h5>
                    <p>
                        {{ strip_tags(Illuminate\Support\Str::limit($port->project_description, $limit = 120, $end = " ")) }} <br>
                    </p>
                    <a href="{{ $port->project_link }}" class="text-info icon-move-right">Read More
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
                </div>
            </div>
          @empty
            <div class="col-lg-3 col-sm-6 ml">
            <div class="card card-plain card-blog" >
                <div class="card-image border-radius-lg position-relative cursor-pointer">
                <div class="blur-shadow-image">
                    <img class="img border-radius-lg move-on-hover img-fluid" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-bags.jpg" alt="bags">
                </div>
                <div class="colored-shadow" style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-bags.jpg&quot;);"></div></div>
                <div class="card-body px-0 text-center">
                <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">Rover raised $65 million</a>
                </h5>
                <p>
                    Finding temporary housing for your dog should be as easy as
                    renting an Airbnb. That’s the idea behind Rover ...
                </p>
                <a href="javascript:;" class="text-info icon-move-right">Read More
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
                </div>
            </div>
            </div>  
          @endforelse

      </div>
    </div>
  </section>
  @endsection