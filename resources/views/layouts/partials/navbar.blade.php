<header class="p-3 bg-primary text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img class="logo" src="{{ asset('logo1.png') }}" height="60" width="90"  />
        </a>
        
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-white" style="font-size: 24px">HOME</a></li>
          <li><a href="/cuci" class="nav-link px-2 text-white"style="font-size: 24px">CUCI</a></li>
          <li><a href="/member" class="nav-link px-2 text-white"style="font-size: 24px">MEMBER</a></li>
          <li><a href="/history" class="nav-link px-2 text-white"style="font-size: 24px">HISTORY</a></li>
        </ul>
        @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
          </div>
        @endauth
  
        @guest
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
          </div>
        @endguest
      </div>
    </div>
</header>