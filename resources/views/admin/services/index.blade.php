@extends('layouts.master')
@section('title') {{__('Services')}} @endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            @if (session()->get('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
            @endif
            <h1 class="display-3">Services</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('service.create')}}" class="btn btn-primary"> {{ __('Add New Service')}}</a>
            </div>
            <br>    
            <!-- Row -->
            <div class="row">
                <!-- column -->
                @foreach ($services as $ser )                                   
                    <div class="col-lg-4 col-md-6">
                        <!-- Card -->
                        <div class="card text-white bg-dark">
                            <img class="card-img-top img-fluid" src="{{ asset('admin/assets/images/big/img4.jpg/') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="row mt-auto">
                                    <div class="col-md-8">
                                        <h4 class="card-title text-white">{{ $ser->title }}</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ml-auto float-right">
                                            <div class="dropdown sub-dropdown">
                                                <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                    <a class="dropdown-item" href="{{ route('service.edit', $ser->id ) }}">Edit</a>
                                                    
                                                    <form method="Post" action="{{ route('service.destroy', $ser->id ) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="dropdown-item pr-0" href="#">
                                                            <input style="border: 0;background: transparent;" class="text-dark pl-0 btn-block text-left" type="submit" name="delete" id="" value="Delete">
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            
                                <p class="card-text pb-3">{{ Str::limit($ser->services_desc, 100, '...')  }}</p>
                                <a href="{{ url('services')}}" class="btn btn-primary ml-auto float-left">{{ $ser->services_btn }}</a>
    
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                @endforeach
            </div>
            <!-- Row -->
        </div>
    </div>
</div>

@endsection