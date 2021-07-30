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
            <h1 class="display-5 text-center pb-2">{{ __('Landing Page Informations') }}</h1>
             @if (!$lanpage)
                <div class="popover-icon text-center">
                    <a class="btn btn-primary pl-0 rounded-circle btn-circle font-12" href="{{ route('landing.edit', $lanpage->id) }}">{{ __('Insert Landing Page Detalis')}}</a>
                </div>
             @else

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="ml-auto">
                            <div class="dropdown sub-dropdown">
                                <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-110px, 39px, 0px);">
                                    <a class="dropdown-item" href="{{ route('landing.edit', $lanpage->id) }}">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 mb-2 mb-sm-0">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link show active pt-3 pb-3" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Our Services Prev</span>
                                </a>
                                <a class="nav-link pt-3 pb-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">About Us Prev</span>
                                </a>
                                <a class="nav-link pt-3 pb-3" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Achievements</span>
                                </a>
                                <a class="nav-link pt-3 pb-3" id="v-pills-newsletter-tab" data-toggle="pill" href="#v-pills-newsletter" role="tab" aria-controls="v-pills-newsletter" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Newsletter</span>
                                </a>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-sm-9">
                          
                            
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <p><b>Description</b></p>
                                    <p class="mb-0">{{ $lanpage->our_services }}</p>
                                    <button class="btn btn-secondary mt-2" disabled>{{ $lanpage->our_services_btn }}</button>
                                    <p class="mt-3"><img src="{{ $lanpage->our_services_img }}" alt="{{ $lanpage->our_services_img }}"></p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <p><b>Description</b></p>
                                    <p class="mb-0">{{ $lanpage->about_us }}</p>
                                    <button class="btn btn-secondary mt-2" disabled>{{ $lanpage->about_us_btn }}</button>
                                    <p class="mt-3"><img src="{{ $lanpage->about_us_img }}" alt="{{ $lanpage->about_us_img }}"></p>
                                </div>
                              
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <div class="table-responsive mb-0">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Achievements Number</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="table-active">
                                                    <th scope="row"> #1</th>
                                                    <td> {{ $lanpage->achievements_name_1 }}</td>
                                                    <td> {{ $lanpage->achievements_num_1 }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#2</th>
                                                    <td> {{ $lanpage->achievements_name_2 }}</td>
                                                    <td> {{ $lanpage->achievements_num_2 }}</td>
                                                </tr>
                                                <tr class="table-primary">
                                                    <th scope="row">#3</th>
                                                    <td> {{ $lanpage->achievements_name_3 }}</td>
                                                    <td> {{ $lanpage->achievements_num_3 }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#4</th>
                                                    <td> {{ $lanpage->achievements_name_4 }}</td>
                                                    <td> {{ $lanpage->achievements_num_4 }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-newsletter" role="tabpanel" aria-labelledby="v-pills-newsletter-tab">
                                    <p><b>Description</b></p>
                                    <p class="mb-0">{{ $lanpage->newsletter_desc }}</p>
                                </div>
                            </div> <!-- end tab-content-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->
                </div> <!-- end card-body-->
            </div>
            @endif
        </div>
    </div>
</div>
@endsection