<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="{{route('index')}}">{{env('APP_NAME')}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{route('index')}}">Home</a></li>
          <li><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('resume')}}">Resume</a></li>
          <li><a href="{{route('services')}}">Services</a></li>
          @auth
          <li><a href="{{route('admin.forms')}}">Admin</a></li>
          @endauth
            @guest
            <li><a href="{{route('login')}}">Login</a></li>
            @endguest
          <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://x.com/My_Self______" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://web.facebook.com/profile.php?id=61554958412780" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/ayokunle-dada-9a2300327/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header>
