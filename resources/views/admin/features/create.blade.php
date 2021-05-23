@extends('layouts.master')
@section('title') {{__('Banner')}} @endsection
@section('content')

<div class="container-fluid">
<div class="row">
  <div class="col-sm-8 offset-sm-2">
      <h1 class="display-3">Create New Feature</h1>
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
        <form class="pt-4" method="post" action="{{ route('feature.store') }}">
            @csrf
            <div class="form-group">    
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="{{ __('Title') }}"/>
            </div>
            <div class="form-group">
              <label for="description">Description:</label>
              <textarea class="form-control" rows="3" name="description" id="description"  placeholder="{{ __('Ddscription here...') }}"></textarea>
          </div>
            <div class="form-group">
                <label for="icon">Icon:</label>
                <input type="text" class="form-control" name="icon" id="icon" placeholder="{{ __('Text On Button') }}"/>
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