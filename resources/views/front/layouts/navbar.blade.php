  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent pt-3">
    <div class="container-fluid">
      <a class="navbar-brand  text-white text-lg text-uppercase text-bolder" href="{{ route('home') }}" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
        services app
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-10 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover w-100">
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a href="{{ route('home') }}" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" >
              Home
            </a>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a href="{{ route('services') }}" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">
              Services
            </a>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a href="{{ route('portfolio') }}" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" >
              Portfolio
            </a>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
              <a href="{{ route('pricing') }}" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">
                Pricing
              </a>
            </li>

            <li class="nav-item dropdown dropdown-hover mx-2">
              <a href="{{ route('about-us') }}" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" >
                About
              </a>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a href="{{ route('blog') }}" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" >
              Blog
            </a>
          </li>

        </ul>
      </div>
      <a class="navbar-brand  text-white text-lg text-uppercase " href="{{ route('contact') }}" rel="tooltip">
        <button class="btn btn-md  bg-white  bg-gradient-primary btn-round mb-0 me-1 mt-2 mt-md-0">Conract Us</button>
      </a>
    </div>
  </nav>
  <!-- End Navbar -->
  