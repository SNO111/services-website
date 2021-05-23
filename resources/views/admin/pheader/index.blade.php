@extends('layouts.master')
@section('title') {{__('Banner')}} @endsection
@push('styles')
    <link href="{{ asset('admin/css/FlipSwitch.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            @if (session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                
            @endif
        </div>
        <div class="col-sm-12">
            <h1 class="display-3">Page Header</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('pheader.create')}}" class="btn btn-primary"> {{ __('Add New Banner')}}</a>
            </div>
            <br>      

            <div class="card">
                @foreach($pheader as $ph)
                <div class="card-header">
                    <!-- Default switch -->
                    <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" tabindex="0" checked>
                        <label class="onoffswitch-label" for="myonoffswitch">Set Default</label>
                    </div>                 
                </div>
                <img class="card-img-top img-fluid" src="{{ asset('admin/assets/images/big/img1.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $ph->title }}</h4>
                    <a href="{{ route('contact') }}" class="btn btn-rounded btn-outline-primary">{{$ph->text_btn}}</a>
                </div>
                <div class="card-footer">
                    <a href="{{ route('pheader.edit', $ph->id) }}" class="btn btn-rounded btn-primary float-left">Edit</a>
                    <form class="float-right" action="{{ route('pheader.destroy', $ph->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-rounded btn-danger" type="submit">Delete</button>
                    </form>
                </div>
                @endforeach
            </div>
        <div>
    </div>
</div>

@endsection
