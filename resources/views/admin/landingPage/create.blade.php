@extends('layouts.master')
@section('title') {{__('Banner')}} @endsection
@section('content')

<div class="container-fluid">
<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <div>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
    <form class="pt-4" method="post" action="{{ route('landing.store') }}" >
        @csrf
        <h2 class="display-5"><b>Our Services Prev:</b></h2>
        <hr class="pt-4">
        <div class="form-group">    
            <label for="our_services">Our Services for You:</label>
            <textarea class="form-control" rows="3" name="our_services" id="our_services" placeholder="{{ __('Dscription here...') }}">{{ old('our_services') }}</textarea>
        </div>
        <div class="form-group">
            <label for="our_services_btn">Our Services Text in Button:</label>
            <input type="text" class="form-control" name="our_services_btn" id="our_services_btn"  value="{{ old('our_services_btn') }}" placeholder="{{ __('Text On Button') }}"/>
        </div>  
        <div class="form-group">
            <label for="our_services_img">Our Services Image:</label>
            <input type="file" class="form-control" name="our_services_img" id="our_services_img"/>
        </div>  
        <hr class="pt-4">
        <h2 class="display-5"><b>About Us Prev:</b></h2>
        <hr class="pt-4">
        <div class="form-group">
            <label for="about_us">About Us Description:</label>
            <textarea class="form-control" rows="3" name="about_us" id="about_us"  placeholder="{{ __('Ddscription here...') }}">{{ old('about_us') }}</textarea>
        </div>
        <div class="form-group">
            <label for="about_us_btn">About Us Text in Button:</label>
            <input type="text" class="form-control" name="about_us_btn" id="about_us_btn"  value="{{ old('about_us_btn') }}" placeholder="{{ __('Text On Button') }}"/>
        </div>
        <div class="form-group">
            <label for="about_us_img">About Us Image:</label>
            <input type="file" class="form-control" name="about_us_img" id="about_us_img"/>
        </div>
        <hr class="pt-4">
        <h2 class="display-5"><b>Achievements:</b></h2>
        <hr class="pt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="achievements_name_1">Title #1:</label>
                    <input type="text" class="form-control" name="achievements_name_1" id="achievements_name_1" value="{{ old('achievements_name_1') }}"placeholder="{{ __('E.g: Projects...') }}"/>
                </div>
            </div>    
            <div class="col-md-3">
                <div class="form-group">
                    <label for="achievements_name_2">Title #2:</label>
                    <input type="text" class="form-control" name="achievements_name_2" id="achievements_name_2" value="{{ old('achievements_name_2') }}"placeholder="{{ __('E.g: Photos...') }}"/>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-group">
                    <label for="achievements_name_3">Title #3:</label>
                    <input type="text" class="form-control" name="achievements_name_3" id="achievements_name_3" value="{{ old('achievements_name_3') }}"placeholder="{{ __('E.g: Clients...') }}"/>
                </div>
            </div>     
            <div class="col-md-3">
                <div class="form-group">
                    <label for="achievements_name_4">Title #4:</label>
                    <input type="text" class="form-control" name="achievements_name_4" id="achievements_name_4" value="{{ old('achievements_name_4') }}"placeholder="{{ __('E.g: B2B...') }}"/>
                </div>
            </div>     
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="achievements_num_1">Number #1:</label>
                    <input type="text" class="form-control" name="achievements_num_1" id="achievements_num_1"  value="{{ old('achievements_num_1') }}" placeholder="{{ __('E.g: 564...') }}"/>
                </div>
            </div>    
            <div class="col-md-3">
                <div class="form-group">
                    <label for="achievements_num_2">Number #2:</label>
                    <input type="text" class="form-control" name="achievements_num_2" id="achievements_num_2" value="{{ old('achievements_num_2') }}" placeholder="{{ __('E.g: 69...') }}"/>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-group">
                    <label for="achievements_num_3">Number #3:</label>
                    <input type="text" class="form-control" name="achievements_num_3" id="achievements_num_3" value="{{ old('achievements_num_3') }}" placeholder="{{ __('E.g: 564...') }}"/>
                </div>
            </div>     
            <div class="col-md-3">
                <div class="form-group">
                    <label for="achievements_num_4">Number #4:</label>
                    <input type="text" class="form-control" name="achievements_num_4" id="achievements_num_4" value="{{ old('achievements_num_4') }}" placeholder="{{ __('E.g: 69...') }}"/>
                </div>
            </div>     
        </div>
        <hr class="pt-4">
        <h2 class="display-5"><b>Description of Newsletter:</b></h2>
        <div class="form-group">
            <textarea class="form-control" rows="3" name="newsletter_desc" id="newsletter_desc"  placeholder="{{ __('Ddscription here...') }}">{{ old('newsletter_desc') }}</textarea>
        </div>
        <hr class="pt-4">                  
        <div class="text-center">
            <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
        </div>
    </form>
    </div>
  </div>
</div>
</div>
@endsection