@extends('layouts.master')
@section('title') {{__('Service | Edit')}} @endsection
@section('content')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">{{ __('Update Statistics') }}</h1>

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
            <form class="pt-4" method="POST" action="{{ route('statsupdate', $stats->id ) }}">
              @method('PATCH') 
                @csrf
                <div class="row">
                  <div class="col">
                    <label for="projects">Projects:</label>
                    <input type="text" class="form-control" name="projects" value={{ $stats->projects }} />
                  </div>
                  <div class="col">
                    <label for="projects_desc">Projects Description:</label>
                    <textarea class="form-control" rows="3" name="projects_desc" placeholder="Text Here...">{{ $stats->projects_desc }}</textarea>
                  </div>
                </div>
                <div class="row">
                   <div class="col">
                      <label for="hours">Hours:</label>
                      <input type="text" class="form-control" name="hours" value={{ $stats->hours }} />
                  </div>      
                  <div class="col">
                      <label for="hours_desc">Hours Description:</label>
                      <textarea class="form-control" rows="3" name="hours_desc" placeholder="Text Here...">{{ $stats->hours_desc }}</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="clients">Clients:</label>
                    <input type="text" class="form-control" name="clients" value={{ $stats->clients }} />
                  </div>      
                  <div class="col">
                      <label for="clients_desc">Clients Description:</label>
                      <textarea class="form-control" rows="3" name="clients_desc" placeholder="Text Here...">{{ $stats->clients_desc }}</textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <label for="ui_ux_design">UX/UI Design:</label>
                    <input type="text" class="form-control" name="ui_ux_design" value={{ $stats->ui_ux_design }} />
                  </div>      
                  <div class="col">
                      <label for="ui_ux_design_desc">UX/UI Design Description:</label>
                      <textarea class="form-control" rows="3" name="ui_ux_design_desc" placeholder="Text Here...">{{ $stats->ui_ux_design_desc }}</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="web_design">Web Design:</label>
                    <input type="text" class="form-control" name="web_design" value={{ $stats->web_design }} />
                  </div>      
                  <div class="col">
                      <label for="web_design_desc">Web Design Description:</label>
                      <textarea class="form-control" rows="3" name="web_design_desc" placeholder="Text Here...">{{ $stats->web_design_desc }}</textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <label for="app_design">App Design:</label>
                    <input type="text" class="form-control" name="app_design" value={{ $stats->app_design }} />
                  </div>      
                  <div class="col">
                      <label for="app_design_desc">App Design Description:</label>
                      <textarea class="form-control" rows="3" name="app_design_desc" placeholder="Text Here...">{{ $stats->app_design_desc }}</textarea>
                  </div>                  
                </div>

                <div class="row">
                  <div class="col">
                    <label for="support">Support:</label>
                    <input type="text" class="form-control" name="support" value={{ $stats->support }} />
                  </div>      
                  <div class="col">
                      <label for="support_desc">Support Description:</label>
                      <textarea class="form-control" rows="3" name="support_desc" placeholder="Text Here...">{{ $stats->support_desc }}</textarea>
                  </div>                  
                </div>


                <div class="form-group">
                  <label for="blog_posts">Blog Posts:</label>
                  <input type="text" class="form-control" name="blog_posts" value={{ $stats->blog_posts }} />
                </div>      

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">{{ __('Update') }}</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection