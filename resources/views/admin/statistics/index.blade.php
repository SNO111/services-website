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
            <h1 class="display-3">All Statistics</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('statsedit', $stat->id )}}" class="btn btn-primary"> {{ __('Edit All Stats')}}</a>
            </div>
            <br>    
            <!-- Row -->
            <div class="row">
                <!-- column -->                               
                    <div class="col-lg-12 col-md-12">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Ammount</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Projects</td>
                                                <td>{{ $stat->projects }}</td>
                                                <td>{{ $stat->projects_desc }}</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Hours</td>
                                                <td>{{ $stat->hours }}</td>
                                                <td>{{ $stat->hours_desc }}</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Clients</td>
                                                <td>{{ $stat->clients }}</td>
                                                <td>{{ $stat->clients_desc }}</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>UX/UI Design</td>
                                                <td>{{ $stat->ui_ux_design }}</td>
                                                <td>{{ $stat->ui_ux_design_desc }}</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Web Design</td>
                                                <td>{{ $stat->web_design }}</td>
                                                <td>{{ $stat->web_design_desc }}</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>App Design</td>
                                                <td>{{ $stat->app_design }}</td>
                                                <td>{{ $stat->app_design_desc }}</td>
                                            </tr>

                                            <tr>
                                                <td>7</td>
                                                <td>Support</td>
                                                <td>{{ $stat->support }}</td>
                                                <td>{{ $stat->support_desc }}</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Blog Posts</td>
                                                <td>{{ $stat->blog_posts }}</td>
                                                <td>{{ $stat->blog_posts_desc }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
               
            </div>
            <!-- Row -->
        </div>
    </div>
</div>

@endsection