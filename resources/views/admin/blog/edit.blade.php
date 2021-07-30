@extends('layouts.master')
@section('title') {{__('Blog } Edit')}} @endsection
@section('content')

<div class="container-fluid">
<div class="row">
  <div class="col-sm-8 offset-sm-2">
      <h1 class="display-3">{{__('Edit Post:') }} <span class="badge bg-primary font-20 text-white font-weight-medium badge-pill">{{ ' ' . $post->title  }} 
        </span>
    </h1>
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
        <form class="pt-4" method="post" action="{{ route('blog.update' , $post->slug) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
            <div class="form-group">    
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" value="@if ( !old('title')) {{ $post->title }} @endif {{ old('title') }}" placeholder="{{ __('Title') }}"/>
            </div>
            <div class="form-group">
              <label for="description">Post body:</label>
              <textarea class="form-control" rows="3" name="body" id="body">
                  @if (!old('body'))
                    {!! $post->body !!}
                  @endif
                    {!! old('body') !!}
                </textarea>
              <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'body' );
            </script>
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