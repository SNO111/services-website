 @extends('app')
  @section('title') {{__('About | Edit')}} @endsection
  @section('content')
  @push('styles')
    <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('front//css/soft-design-system.min.css?v=1.0.3') }}" rel="stylesheet" />
  <!-- Anti-flicker snippet (recommended)  -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  @endpush

<section class="contact-us">

  <header>
    <div class="page-header section-height-85">
      <div>
        <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0" src="{{ asset('front//img/curved-images/curved8.jpg') }}">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex justify-content-center flex-column">
            <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-8 my-sm-6 mt-4 mb-5">
              <div class="text-center">
                  @if (session('success'))
                      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                          {{ session('success') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @endif
                <h3 class="text-gradient text-primary">Contact us</h3>
                <p class="mb-0">
                  For further questions, including partnership opportunities, please email <a href="mailto::example@example.com" class="__cf_email__" data-cfemail="80e8e5ececefc0e3f2e5e1f4e9f6e5adf4e9edaee3efed">example@example.com</a>
                  or contact using our contact form.
                </p>
              </div>
              <form role="form" id="contact-form" method="post" autocomplete="off" action="{{ route('contact.store') }}">
                @csrf
                <div class="card-body pb-2">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Full Name</label>
                      <div class="input-group mb-2">
                        <input class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name"  value="{{ old('name') }}" placeholder="Full Name" aria-label="Full Name" type="text">
                      </div>
                      <!-- Error -->
                      @if ($errors->has('name'))
                      <div class="error">
                          {{ $errors->first('name') }}
                      </div>
                      @endif
                    </div>
                    <div class="col-md-6 ps-md-2">
                      <label>Email</label>
                      <div class="input-group">
                        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" value="{{ old('email') }}" placeholder="example@example.com">
                      </div>
                      <!-- Error -->
                      @if ($errors->has('email'))
                      <div class="error">
                          {{ $errors->first('email') }}
                      </div>
                      @endif
                    </div>
                  </div>
                  <div class="form-group mb-0 mt-md-0 mt-4">
                    <label>Phone</label>
                    <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Phone Number">
                    <!-- Error -->
                    @if ($errors->has('phone'))
                    <div class="error">
                        {{ $errors->first('phone') }}
                    </div>
                    @endif
                  </div>
                  <div class="form-group mb-0 mt-md-0 mt-4">
                    <label>Subject</label>
                    <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject of the message">
                    <!-- Error -->
                    @if ($errors->has('subject'))
                    <div class="error">
                        {{ $errors->first('subject') }}
                    </div>
                    @endif
                  </div>
                  <div class="form-group mb-0 mt-md-0 mt-4">
                    <label>How can we help you?</label>
                    <textarea name="message" class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" rows="6" placeholder="Describe your problem in at least 250 characters">{{ old('message') }}</textarea>
                    <!-- Error -->
                    @if ($errors->has('message'))
                    <div class="error">
                        {{ $errors->first('message') }}
                    </div>
                    @endif
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="col-md-5 d-flex align-items-stretch">
								<div id="map">
			          </div>
							</div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>
</section>
@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('assets/js/google-map.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endpush
@endsection