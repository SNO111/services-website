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
            <h1 class="display-3 text-center pb-2">{{ __('Features') }}</h1>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h4 class="card-title">{{ __('All Features') }}</h4>
                        <div class="ml-auto">
                            <div class="dropdown sub-dropdown">
                                <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                    <a class="dropdown-item" href="{{ route('feature.create') }}">Insert</a>
                                    <a class="dropdown-item" href="#">Delete All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">
                            <thead>
                                <tr class="border-0 text-center">
                                    <th class="border-0 font-14 font-weight-medium text-muted">{{ __('Icon:') }}</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Title:</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Description:</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Settings:</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ( $features as $feat )
                                <tr>
                                    <td class="border-top-0 px-2 py-4">                                  
                                        <span class="btn btn-dark rounded-circle btn-circle font-16">
                                            <i class="fa fa-{{ $feat->icon }} rounded-circle"></i>
                                        </span>  
                                    </td>
                                    <td class="border-top-0 text-muted px-2 py-4 font-14">{{ $feat->title }}</td>
                                    <td class="border-top-0 text-muted px-2 py-4 font-14">{{ $feat->description }}</td>
                                    <td class="border-top-0 text-muted px-2 py-4 font-14">
                                        <div class="ml-auto">
                                            <div class="dropdown sub-dropdown">
                                                <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                    <a class="dropdown-item" href="{{ route('feature.edit', $feat->id ) }}">Update</a>
                                                    
                                                    <form method="Post" action="{{ route('feature.destroy', $feat->id ) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="dropdown-item pr-0" href="#">
                                                            <input style="border: 0;background: transparent;" class="text-dark pl-0 btn-block text-left" type="submit" name="delete" id="" value="Delete">
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection