<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      Rent<span>Car</span> NaSee
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
          <a href="{{ route('home') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
          <a href="{{ route('about') }}" class="nav-link">About</a>
        </li>
        <li class="nav-item {{ request()->is('service') ? 'active' : '' }}">
          <a href="{{ route('service') }}" class="nav-link">Services</a>
        </li>
        <li class="nav-item {{ request()->is('pricing') ? 'active' : '' }}">
          <a href="{{ route('pricing') }}" class="nav-link">Pricing</a>
        </li>
        <li class="nav-item {{ request()->is('car') ? 'active' : '' }}">
          <a href="{{ route('car') }}" class="nav-link">Cars</a>
        </li>
        <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
          <a href="{{ route('contact') }}" class="nav-link">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        @guest
        <li class="nav-item">
          <a href="{{ route('login') }}" class="login100-form-btn">
            Get Started
          </a>
        </li>
        @else
        @if (Auth::user()->role == 'admin')
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <button type="button" class="btn btn-danger">Left</button>
          <button type="button" class="btn btn-warning">Middle</button>
          <button type="submit" class="btn btn-danger py-2 px-3">
            Logout
          </button>
        </div>
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="btn btn-success bg-green-200 rounded-pill py-2 px-3 mr-2">
            Dashboard
          </a>
        </li>
        @else
        <li class="nav-item">
          <a href="{{ route('profile.index') }}" class="btn btn-primary py-2 px-3 mr-2">
            Profile
          </a>
        </li>        
        @endif
        {{-- <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger rounded-pill py-2 px-3">
              Logout
            </button>
          </form>
        </li> --}}
        @endguest
      </ul>
    </div>
  </div>
</nav>
