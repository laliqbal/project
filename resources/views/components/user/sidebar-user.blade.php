<div class="container d-flex align-items-center">

    <div class="logo me-auto">
        <h1><a href="{{ asset('Lumia') }}/index.html">Lumia</a></h1>
        {{--  <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->  --}}
    </div>

    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            @foreach ($menuss as $menu)
                <li>
                    <a href="{{ route($menu['url']) }}">
                        {!! $menu['icon'] !!} <span>{{ $menu['name'] }}</span></a>
                </li>
            @endforeach
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

    <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    </div>

</div>
