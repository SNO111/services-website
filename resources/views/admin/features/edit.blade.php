@extends('layouts.master')
@section('title') {{__('Banner Edit')}} @endsection
@section('content')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">{{ __('Update Feature') }}</h1>

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
            <form class="pt-4" method="post" action="{{ route('feature.update', $feature->id) }}">
                @method('PATCH') 
                @csrf
                <div class="form-group">

                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" value={{ $feature->title }} />
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" rows="3" name="description" placeholder="Text Here...">{{ $feature->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="icon">Icon:</label>
                    <input type="text" class="form-control" name="icon" value={{ $feature->icon }} />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">{{ __('Update') }}</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection