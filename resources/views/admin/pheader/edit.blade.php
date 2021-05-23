@extends('layouts.master')
@section('title') {{__('Banner Edit')}} @endsection
@section('content')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">{{ __('Update Page Geader') }}</h1>

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
            <form class="pt-3" method="post" action="{{ route('pheader.update', $pheader->id) }}">
                @method('PATCH') 
                @csrf
                <div class="form-group">

                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" value={{ $pheader->title }} />
                </div>
                <div class="form-group">
                    <label for="text_btn">Job Title:</label>
                    <input type="text" class="form-control" name="text_btn" value={{ $pheader->text_btn }} />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">{{ __('Update') }}</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection