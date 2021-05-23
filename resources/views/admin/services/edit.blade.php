@extends('layouts.master')
@section('title') {{__('Service | Edit')}} @endsection
@section('content')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">{{ __('Update Service') }}</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br /> 
            @endif
            <form class="pt-4" method="post" action="{{ route('service.update', $service->id) }}">
                @method('PATCH') 
                @csrf
                <div class="form-group">

                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" value={{ $service->title }} />
                </div>
                <div class="form-group">
                    <label for="services_desc">Description:</label>
                    <textarea class="form-control" rows="3" name="services_desc" placeholder="Text Here...">{{ $service->services_desc }}</textarea>
                </div>
                <div class="form-group">
                    <label for="services_btn">Service Button:</label>
                    <input type="text" class="form-control" name="services_btn" value={{ $service->services_btn }} />
                </div>      
                <div class="form-group">
                    <label for="service_image">Service Image:</label>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="service_image" id="service_image" value="{{ $service->service_image }}">
                            <label class="custom-file-label" for="service_image">{{ $service->service_image }}</label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">{{ __('Update') }}</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection