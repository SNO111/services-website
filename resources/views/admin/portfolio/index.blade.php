@extends('layouts.master')
@section('title') {{__('Portfolio')}} @endsection
@section('content')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- basic table -->
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <h1 class="display-3 text-center pb-2">{{ __('Portfolio') }}</h1>
            <a class="btn btn-info" href="{{ route('portfolio.create') }}">{{ __('Add New Project') }}</a>
            <hr>
        </div>
        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-4">
                            <div class="card card-hover">
                                <div class="p-2 bg-primary text-center">
                                    <h1 class="font-light text-white"></h1>
                                    <h6 class="text-white">Total Articles</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-4">
                            <div class="card card-hover">
                                <div class="p-2  bg-success text-center">
                                    <h1 class="font-light text-white"></h1>
                                    <h6 class="text-white">Active Posts</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-4">
                            <div class="card card-hover">
                                <div class="p-2 bg-secondary text-center">
                                    <h1 class="font-light text-white"></h1>
                                    <h6 class="text-white">Saved as Deaft</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->

                    </div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>ID</th>
                                    <th style="">Project Name</th>
                                    <th style="">Project Description</th>
                                    <th style="white-space: unset;">Project Link</th>
                                    <th style="white-space: unset;">Project Client</th>
                                    <th>Date</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolio as $port)                                
                                <tr>
                                    <td class="text-center">
                                        @if ($port->active == 1)
                                            <i class="fa fa-circle text-success font-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Active"></i>
                                        @else
                                            <i class="fa fa-circle text-secondary font-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Not Active"></i>
                                        @endif
                                    </td>
                                    <td>{{ $port->id }}</td>
                                    <td style=""><a href="{{ route('portfolio_projecr', $port->id ) }}" class="font-weight-medium link">{{ $port->project_name }}</a></td>

                                    <td style=""><p>{{ strip_tags(Illuminate\Support\Str::limit($port->project_description, $limit = 60, $end = "....")) }}</p></td>
                                    <td style="white-space: unset;"><a href="{{ $port->project_link }}" target="_blanck">{{ $port->project_link }}</a></td>
                                    <td style="white-space: unset;">{{ $port->clients_name }}</td>
                                    <td>{{ $port->created_at->format('M d,Y') }}</td>
                                    <td> 
                                        <div class="popover-icon">
                                            <a class="btn btn-primary pl-0 rounded-circle btn-circle font-12" href="{{ route('portfolio.edit', $port->id)}}">Edit</a>
                                            <form class="btn btn-danger rounded-circle btn-circle font-12 popover-item" method="Post" action="{{ route('portfolio.destroy', $port->id ) }}">
                                                @csrf
                                                @method('DELETE')
                                                    <input class="text-white pl-0 bg-transparent border-0 text-left" type="submit" name="Del" id="" value="Del">
                                                </a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination float-right">
                             {!! $portfolio->links() !!}
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection