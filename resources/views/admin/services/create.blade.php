@extends('layouts.master')
@section('title') {{__('Banner')}} @endsection
@section('content')

<div class="container-fluid">
<div class="row">
  <div class="col-sm-8 offset-sm-2">
      <h1 class="display-3">Create New Service</h1>
    <div>
      @if (session('status'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('status') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      @endif
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
        <form class="pt-4" method="post" action="{{ route('service.store') }}">
            @csrf
            <div class="form-group">    
                <label for="title">Service Title:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="{{ __('Title') }}"/>
            </div>

            <div class="form-group">
                <label for="services_desc">Service Description:</label>
                <textarea class="form-control" rows="3" name="services_desc" id="services_desc"  placeholder="{{ __('Ddscription here...') }}"></textarea>
            </div>

            <div class="form-group">
                <label for="services_btn">Service Button:</label>
                <input type="text" class="form-control" name="services_btn" id="services_btn" placeholder="{{ __('Text On Button') }}"/>
            </div>
            
            <div class="form-group">
                <label for="service_image">Service Image:</label>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="service_image" id="service_image">
                        <label class="custom-file-label" for="service_image">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
          </div>
        </form>
    </div>
  </div>
</div>
</div>
@endsection