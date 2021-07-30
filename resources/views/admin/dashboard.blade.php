@extends('layouts.master')
@section('title') Admin Panel | Dashborad @endsection
@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">
                    
                    <!-- This sets the $time variable to the current hour in the 24 hour clock format -->
                    {{$time = date("H") }}
                    @switch($time)
                        @case($time < "12")
                            Good morning
                            @break
                        @case($time >= "12" && $time < "17")
                            Good afternoon
                            @break
                        @case($time >= "17" && $time < "19")
                            Good evening
                            @break
                        @case($time >= "19")
                            Good night
                            @break
                    @endswitch
                    {{ auth()->user()->name }}</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option selected>Aug 19</option>
                        <option value="1">July 19</option>
                        <option value="2">Jun 19</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- *************************************************************** -->
        <!-- Start First Cards -->
        <!-- *************************************************************** -->
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">{{ count($mailbox) }}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Mail Box Clients</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h2 class="text-dark mb-1 font-weight-medium">{{ count($services) }}</h2>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Srvices</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">1538</h2>
                                <span
                                    class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Projects</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h2 class="text-dark mb-1 font-weight-medium">{{ count($blog) }}</h2>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Blog Articles</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End First Cards -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Sales Charts Section -->
        <!-- *************************************************************** -->
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sessions by device
                        </h4>
                        <div id="campaign-v2" class="mt-2" style="height:283px; width:100%;"></div>
                        <ul class="list-style-none mb-0">
                            <li>
                                <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                <span class="text-muted">Direct Sales</span>
                                <span class="text-dark float-right font-weight-medium">$2346</span>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                <span class="text-muted">Referral Sales</span>
                                <span class="text-dark float-right font-weight-medium">$2108</span>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                <span class="text-muted">Affiliate Sales</span>
                                <span class="text-dark float-right font-weight-medium">$1204</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Active Users right now</h4>
                        <div class="net-income mt-4 position-relative" style="height:294px;"></div>
                        <ul class="list-inline text-center mt-5 mb-2">
                            <li class="list-inline-item text-muted font-italic">Sales for this month</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Sessions by Location</h4>
                        <div class="" style="height:180px">
                            <div id="visitbylocate" style="height:100%"></div>
                        </div>
                        <div class="row mb-3 align-items-center mt-1 mt-5">
                            <div class="col-4 text-right">
                                <span class="text-muted font-14">India</span>
                            </div>
                            <div class="col-5">
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <span class="mb-0 font-14 text-dark font-weight-medium">28%</span>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <div class="col-4 text-right">
                                <span class="text-muted font-14">UK</span>
                            </div>
                            <div class="col-5">
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 74%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <span class="mb-0 font-14 text-dark font-weight-medium">21%</span>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <div class="col-4 text-right">
                                <span class="text-muted font-14">USA</span>
                            </div>
                            <div class="col-5">
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-cyan" role="progressbar" style="width: 60%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <span class="mb-0 font-14 text-dark font-weight-medium">18%</span>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4 text-right">
                                <span class="text-muted font-14">China</span>
                            </div>
                            <div class="col-5">
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <span class="mb-0 font-14 text-dark font-weight-medium">12%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End Sales Charts Section -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Location and Earnings Charts Section -->
        <!-- *************************************************************** -->
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <h4 class="card-title mb-0">Google Analytics Statistics</h4>
                            <div class="ml-auto">
                                <div class="dropdown sub-dropdown">
                                    <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                        id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                        <a class="dropdown-item" href="#">Insert</a>
                                        <a class="dropdown-item" href="#">Update</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 mb-5">
                            <div class="stats ct-charts position-relative" style="height: 315px;"></div>
                        </div>
                        <ul class="list-inline text-center mt-4 mb-0">
                            <li class="list-inline-item text-muted font-italic">Earnings for this month</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">What pages do your users visit?</h4>
                        <div><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="bar-chart-horizontal" height="304" width="609" style="display: block; width: 609px; height: 304px;" class="chartjs-render-monitor"> </canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card mb-3">
                    <div class="card-body pt-3 pb-3">
                        <h4 class="card-title mb-0">Recent Activity</h4>
                    </div>
                </div>
            </div>
            <!-- Latest Added Services -->
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Latest Added Services</h4>
                        <div class="mt-4 activity">
                            @if ($services->isEmpty())
                                <p>There is no added services yet!</p>
                                <a href="{{ route('service.create') }}"><span class="badge badge-pill badge-primary">Add one here</span></a>     
                            @else
                                @foreach ($services as $ser)                          
                                <div class="d-flex align-items-start border-left-line pb-3">
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </div>
                                    <div class="ml-3 mt-2">
                                        <h5 class="text-dark font-weight-medium mb-2">{{ $ser->title }}</h5>
                                        <p class="font-14 mb-2 text-muted">{{ strip_tags(Illuminate\Support\Str::limit($ser->services_desc, $limit = 60, $end = "....")) }}</p>
                                        <span class="font-weight-light font-14 text-muted">{{ $ser->created_at->format('M d,Y')  }}</span>
                                    </div>
                                </div>  
                                @endforeach   
                            @endif
                        </div>
                    </div>
                </div>
            </div>
             <!-- Latest Added Articles -->
             <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Latest Added Articles</h4>
                        <div class="mt-4 activity">
                            @if ($blog->isEmpty())
                                <p>There is no added articles yet</p>
                                <a href="{{ route('blog.create') }}"><span class="badge badge-pill badge-primary">Add one here</span></a>     
                            @else
                                @foreach ($blog as $art)  
                                <div class="d-flex align-items-start border-left-line pb-3">
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </div>
                                    <div class="ml-3 mt-2">
                                        <h5 class="text-dark font-weight-medium mb-2">{{ $art->title }}</h5>
                                        <p class="font-14 mb-2 text-muted">{{ strip_tags(Illuminate\Support\Str::limit($art->body, $limit = 60, $end = "....")) }}Camera.
                                        </p>
                                        <span class="font-weight-light font-14 text-muted">{{ $art->created_at->format('M d,Y')  }}</span>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Added Projects -->
            <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Latest Added Projects</h4>
                    <div class="mt-4 activity">
                        @if ($services->isEmpty())
                            <p>Portfolio is no empty!</p>
                            <a href=""><span class="badge badge-pill badge-primary">Add portfolio's project here</span></a>     
                        @else
                            @foreach ($services as $ser)  
                            <div class="d-flex align-items-start border-left-line pb-3">
                                <div>
                                    <a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </div>
                                <div class="ml-3 mt-2">
                                    <h5 class="text-dark font-weight-medium mb-2">New Product Sold!</h5>
                                    <p class="font-14 mb-2 text-muted">John Musa just purchased <br> Cannon 5M
                                        Camera.
                                    </p>
                                    <span class="font-weight-light font-14 text-muted">10 Minutes Ago</span>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
                   
        </div>
        <!-- *************************************************************** -->
        <!-- End Location and Earnings Charts Section -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Top Leader Table -->
        <!-- *************************************************************** -->
        <div class="row">
            <div class="col-md-12 col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Latest Mailbox</h4>
                        <div class="table-responsive">
                            <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                <tbody>
                                    @if ($mailbox->isEmpty())
                                        <p class="text-center">Mailbox is empty!</p>
                                    @else
                                        
                                    @endif
                                    <!-- row -->
                                    @foreach ($mailbox as $mail )
                                    <tr>
                                        <td>
                                            <span class="mb-0 text-muted">{{ $mail->name }}</span>
                                        </td>
                                        <!-- Message -->
                                        <td>
                                            <a class="link" href="{{ route('mailshow', $mail->id ) }}">
                                                <span class="badge badge-pill text-white font-medium badge-danger mr-2">New</span>
                                                <span class="text-dark">{{ strip_tags(Illuminate\Support\Str::limit($mail->message, $limit = 30, $end = "....")) }}</span>
                                            </a>
                                        </td>
                                        <!-- Time -->
                                        <td class="text-muted">{{ $mail->created_at->format('M d,Y') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    @push('script')
        <script src="{{ asset('admin/js/pages/chartjs/chartjs.init.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/chart.js/dist/Chart.min.js') }}"></script>
    @endpush
@endsection