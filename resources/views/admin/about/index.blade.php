@extends('layouts.master')
@section('title') {{__('Feature')}} @endsection
@push('styles')
    <link href="{{ asset('admin/css/FlipSwitch.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="container-fluid">
    <div class="row">  
        <div class="col-12"> 
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <!---->
            <h1 class="display-3 text-center">{{ __('About') }}</h1>
            <br>      
        </div>
    </div>
    @if ($about == null)
    <div>
        <a href="{{ route('about.create')}}" class="btn btn-primary"> {{ __('Insert About Detalis')}}</a>
    </div>
    @else
        <div class="row">
            <div class="col-12 mt-2">
                <h3 class="mb-0 text-dark">Our Story</h3>
                <p class="text-muted mt-2 font-12">{{ $about->story_description }}</p>        
                <hr>
            </div>

            <div class="col-md-4">                
                <h4 class="text-dark">{{ $about->title_1 }}</h4>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">{{ $about->short_text_1 }}</p>
                        <p class="card-text">{{ $about->icon_1 }}</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="col-md-4">
                <h4 class="text-dark">{{ $about->title_2 }}</h4>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">{{ $about->short_text_2 }}</p>
                        <p class="card-text">{{ $about->icon_2 }}</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="col-md-4">
                <h4 class="text-dark">{{ $about->title_3 }}</h4>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">{{ $about->short_text_3 }}</p>
                        <p class="card-text">{{ $about->icon_3 }}</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="col-md-4">
                <h4 class="text-dark">{{ $about->title_4 }}</h4>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">{{ $about->short_text_4 }}</p>
                        <p class="card-text">{{ $about->icon_4 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-info" href="{{ route('about.edit', $about->id ) }}">Edit</a>
                
        <form class="float-right" method="Post" action="{{ route('about.destroy', $about->id ) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit" name="delete">Delete</button>
        </form>
    @endif

</div>

    
@endsection