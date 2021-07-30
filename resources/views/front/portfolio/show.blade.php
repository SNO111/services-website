@extends('app')
@section('title') {{__('Portfolio | ') . $project->project_name }} @endsection
@push('styles')
<style>

</style>
@endpush
@section('content')

 
<section class="py-sm-7 py-5 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 mx-auto">
          <div class="row py-lg-7 py-5">
            <div class="col-lg-3 col-md-5 position-relative my-auto">
              <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2" src="{{ asset('front/img/bruce-mars.jpg') }}" alt="bruce">
            </div>
            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h4 class="mb-0b text-white">{{ $project->project_name }}</h4>
              </div>
              <div class="row mb-4">
                <div class="col-auto">
                  <span class="h6 text-primary">Client:  </span>
                  <span class="text-white text-capitalize">{{ $project->clients_name }}</span>
                </div>
                <div class="col-auto">
                    <span class="h6 text-primary">Country of Project:  </span>
                    <span class="text-white text-capitalize">{{ $project->client_country }}</span>
                </div>
                <div class="col-auto">
                    <span class="h6 text-primary">Date:  </span>
                    <span class="text-white text-capitalize">{{ $project->created_at->format('M d,Y') }}</span>
                </div>
              </div>
              <p class="text-lg mb-0">
                {{ strip_tags(Illuminate\Support\Str::limit($project->project_description, $limit = 2000, $end = " ")) }} <br>
              </p>
              <hr>
              <p>
                Project Link:                 
                <a href="{{ route('portfolio_projecr', $project->id ) }}" class="text-info icon-move-right"> Check It Out
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5 text-white text-capitalize">Check latest Projects</h3>
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
                        {{ strip_tags(Illuminate\Support\Str::limit($project->project_description, $limit = 120, $end = " ")) }} <br>
                    </p>
                    <a href="{{ $project->project_link }}" class="text-info icon-move-right">Read More
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