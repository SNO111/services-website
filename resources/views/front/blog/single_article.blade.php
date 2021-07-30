@extends('app')
@section('title') {{__('Blog')}} @endsection
@section('content')
@push('styles')

@endpush
@section('content')
<section class="py-7">
    <div class="page-header min-vh-85" style="background-position-y: 50%;">
      <div class="position-absolute border-radius-lg border-top-start-radius-0 border-top-end-radius-0 border-bottom-end-radius-0 fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/office.jpg'); background-size:cover;">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex justify-content-center flex-column">
            <div class="card card-body d-flex justify-content-center px-5 shadow-lg mt-lg-5 mt-3 py-5">
              <h1 class="text-gradient text-primary mb-0">{{ $post->title }}</h1>
              <p class="text-uppercase text-lg me-4 text-dark">{{ $post->created_at->format('M d,Y') }}</p>
              <h5 class="mt-2">Connect with us on</h5>
              <div class="d-flex justify-content-start">
                <a href="javascript:;"><i class="fab fa-facebook text-dark me-4 text-lg" aria-hidden="true"></i></a>
                <a href="javascript:;"><i class="fab fa-instagram text-dark me-4 text-lg" aria-hidden="true"></i></a>
                <a href="javascript:;"><i class="fab fa-twitter text-dark me-4 text-lg" aria-hidden="true"></i></a>
                <a href="javascript:;"><i class="fab fa-google-plus text-dark text-lg" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ms-auto me-auto">
          <p class="">{!! $post->body !!}</p>
        </div>
      </div>
    </div>
  </section>
@endsection