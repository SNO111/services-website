<div class="card-body">
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
                <div class="p-2 bg-primary text-center">
                    <h1 class="font-light text-white">{{ $posts }}</h1>
                    <h6 class="text-white">Total Articles</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
                <div class="p-2 bg-success text-center">
                    <h1 class="font-light text-white">{{ $post_active }}</h1>
                    <h6 class="text-white">Active Posts</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
                <div class="p-2 bg-danger text-center">
                    <h1 class="font-light text-white">{{ $post_draft }}</h1>
                    <h6 class="text-white">Saved as Deaft</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>