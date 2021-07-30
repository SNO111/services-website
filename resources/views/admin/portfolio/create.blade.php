@extends('layouts.master')
@section('title') {{__('Portfolio | Add')}} @endsection
@section('content')

<div class="container-fluid">
<div class="row">
  <div class="col-sm-8 offset-sm-2">
      <h1 class="display-3">{{__('Create New Project')}}</h1>
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
        
        <script src="{{ asset('admin/js/ckeditor/ckeditor.js')}}"></script>
        <form class="pt-4" method="post" action="{{ route('portfolio.store') }}">
            @csrf
            <div class="form-group">    
                <label for="project_name">Project Name:</label>
                <input type="text" class="form-control" name="project_name" id="project_name" value="{{ old('project_name')}}" placeholder="{{ __('Name') }}"/>
            </div>
            <div class="form-group">
              <label for="project_description">Project Description:</label>
              <textarea class="form-control" rows="3" name="project_description" id="project_description">{{ old('project_description') }}</textarea>
              <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'project_description' );
            </script>
          </div>
            <div class="form-group">    
                <label for="project_link">Project Link:</label>
                <input type="text" class="form-control" name="project_link" id="project_link" value="{{ old('project_link')}}" placeholder="{{ __('Link') }}"/>
            </div>           
            <div class="form-group">    
                <label for="clients_name">Project Client:</label>
                <input type="text" class="form-control" name="clients_name" id="clients_name" value="{{ old('clients_name')}}" placeholder="{{ __('Client Name') }}"/>
            </div>
            <div class="form-group">    
                <label for="client_country">Project Country:</label>
                <input type="text" class="form-control" name="client_country" id="client_country" value="{{ old('client_country')}}" placeholder="{{ __('Client Project Country') }}"/>
            </div>

            <div class="form-group">    
                <label for="project_display_img">Project Display Iamge:</label>
                <input type="file" class="form-control" name="project_display_img" id="project_display_img" />
            </div>
            <div class="form-group">    
                <label for="project_img_1">Image One <b>Optional</b>:</label>
                <input type="file" class="form-control" name="project_img_1" id="project_img_1"/>
            </div>
            <div class="form-group">    
                <label for="project_img_2">Image Two <b>Optional</b>:</label>
                <input type="file" class="form-control" name="project_img_2" id="project_img_2" />
            </div>
            <div class="form-group">    
                <label for="project_img_3">Image Three <b>Optional</b>:</label>
                <input type="file" class="form-control" name="project_img_3" id="project_img_3" />
            </div>
            <div class="text-center">
              <button type="submit" name="publish" class="btn btn-success mt-4">{{ __('Publish') }}</button>
              <button type="submit" name="save" class="btn btn-secondary mt-4">{{ __('Save Draft') }}</button>
          </div>
        </form>
    </div>
  </div>
</div>
</div>
@endsection