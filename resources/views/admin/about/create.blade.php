@extends('layouts.master')
@section('title') {{__('Banner')}} @endsection
@section('content')

<div class="container-fluid">
<div class="row">
  <div class="col-sm-8 offset-sm-2">
      <h1 class="display-3">About | Our Stroy</h1>
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
        <form class="pt-4" method="post" action="{{ route('about.store') }}">
            @csrf

            <div class="form-group">
                <textarea class="form-control" rows="3" name="story_description" id="story_description"  placeholder="{{ __('Our Story Ddscription here...') }}"></textarea>
            </div>
            <hr>
            <!-- -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">    
                        <label for="title_1">Title #1:</label>
                        <input type="text" class="form-control" name="title_1" id="title_1" placeholder="{{ __('Title') }}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Icon #1:</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="icon_1" id="icon_1">
                            <label class="custom-file-label" for="icon_1">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="short_text_1">Description #1:</label>
                <textarea class="form-control" rows="3" name="short_text_1" id="short_text_1"  placeholder="{{ __('Ddscription here...') }}"></textarea>
            </div>
            <hr>
            <!-- -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">    
                        <label for="title_2">Title #2:</label>
                        <input type="text" class="form-control" name="title_2" id="title_2" placeholder="{{ __('Title') }}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Icon #2:</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="icon_2" id="icon_2">
                            <label class="custom-file-label" for="icon_2">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="short_text_2">Description #2:</label>
                <textarea class="form-control" rows="3" name="short_text_2" id="short_text_2"  placeholder="{{ __('Ddscription here...') }}"></textarea>
            </div>
            <hr>
            <!-- -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">    
                        <label for="title_3">Title #3:</label>
                        <input type="text" class="form-control" name="title_3" id="title_3" placeholder="{{ __('Title') }}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Icon #3:</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="icon_3" id="icon_3">
                            <label class="custom-file-label" for="icon_3">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="short_text_3">Description #3:</label>
                <textarea class="form-control" rows="3" name="short_text_3" id="short_text_3"  placeholder="{{ __('Ddscription here...') }}"></textarea>
            </div>
            <hr>
            <!-- -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">    
                        <label for="title_4">Title #4:</label>
                        <input type="text" class="form-control" name="title_4" id="title_4" placeholder="{{ __('Title') }}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Icon #4:</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="icon_4" id="icon_4">
                            <label class="custom-file-label" for="icon_4">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="short_text_4">Description #4:</label>
                <textarea class="form-control" rows="3" name="short_text_4" id="short_text_4"  placeholder="{{ __('Ddscription here...') }}"></textarea>
            </div>
            <!-- -->
            
            <div class="text-center">
              <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
          </div>
        </form>
    </div>
  </div>
</div>
</div>
@endsection