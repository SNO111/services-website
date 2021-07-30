@extends('app')
@section('title') {{__('Blog')}} @endsection
@section('content')
@push('styles')

@endpush
@section('content')
<!-- START Blogs w/ 3 rows w/ image on left & title, text, author on end-->
<section class="py-7">
    <div class="container">
      <div class="row">
        <div class="col-md-10 ms-auto me-auto">
          @forelse ( $blog as $post )
            <div class="card card-plain card-blog mt-5">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-image position-relative border-radius-lg">
                    <div class="blur-shadow-image">
                      <img class="img border-radius-lg img-fluid" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-cart.jpg">
                    </div>
                  </div>
                </div>
                <div class="col-md-7 my-auto ms-md-3 mt-md-auto mt-4">
                  <h3>
                    <a href="{{  route('single-article', $post->id ) }}" class="text-white text-primary font-weight-normal">{{ $post->title }}</a>
                  </h3>
                  <p>
                    {{ strip_tags(Illuminate\Support\Str::limit($post->body, $limit = 220, $end = " "))  }}
                  </p>
                  <span class="">{{ $post->created_at->format('M d,Y') }}</span><br>
                    <a href="{{  route('single-article', $post->id ) }}" class="text-primary icon-move-right text-sm">Learn More
                      <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a>
                </div>
              </div>
            </div>
          @empty
            <div class="card card-plain card-blog mt-5">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-image position-relative border-radius-lg">
                    <div class="blur-shadow-image">
                      <img class="img border-radius-lg img-fluid" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-cart.jpg">
                    </div>
                  </div>
                </div>
                <div class="col-md-7 my-auto ms-md-3 mt-md-auto mt-4">
                  <h3>
                    <a href="javascript:;" class="text-gradient text-primary font-weight-normal">Miami raised $65 million for pet sitting</a>
                  </h3>
                  <p>
                    Finding temporary housing for your dog should be as easy as renting an Airbnb. That’s the idea behind Rover, which raised $65 million to expand its pet sitting and dog-walking businesses.. 
                  </p>
                    <a href="javascript:;" class="text-primary icon-move-right text-sm">Learn More
                      <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a>
                </div>
              </div>
            </div>
    
            <div class="card card-plain card-blog mt-5">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-image position-relative border-radius-lg">
                    <div class="blur-shadow-image">
                      <img class="img border-radius-lg img-fluid" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-flower.jpg">
                    </div>
                  </div>
                </div>
                <div class="col-md-7 my-auto ms-md-3 mt-md-auto mt-4">
                  <h3>
                    <a href="javascript:;" class="text-gradient text-primary font-weight-normal">MateLabs mixes machine learning</a>
                  </h3>
                  <p>
                    If you’ve ever wanted to train a machine learning model and integrate it with IFTTT, a new offering from MateLabs. MateVerse, a platform where novices can spin out machine... 
                  </p>
                    <a href="javascript:;" class="text-primary icon-move-right text-sm">Learn More
                      <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a>
                </div>
              </div>
            </div>
    
            <div class="card card-plain card-blog mt-5">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-image position-relative border-radius-lg">
                    <div class="blur-shadow-image">
                      <img class="img border-radius-lg img-fluid" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-stair.jpg">
                    </div>
                  </div>
                </div>
                <div class="col-md-7 my-auto ms-md-3 mt-md-auto mt-4">
                  <h3>
                      <a href="javascript:;" class="text-gradient text-primary font-weight-normal">US venture investment ticks up</a>
                  </h3>
                  <p>
                      Venture investment in U.S. startups rose sequentially in the second quarter of 2017, boosted by large, late-stage financings and a few outsized early-stage rounds in tech and healthcare.. 
                  </p>
                    <a href="javascript:;" class="text-primary icon-move-right text-sm">Learn More
                      <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a>
                </div>
              </div>
            </div>
                      
          @endforelse
          
          <section class="py-7">
            <div class="container">
              <div class="row justify-space-between py-2">
                <div class="col-lg-4 mx-auto">
                  <ul class="pagination pagination-primary m-4">
                    {!! $blog->links() !!}
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <!-- END Blogs w/ 3 rows w/ image on left & title, text, author on end-->
  @endsection