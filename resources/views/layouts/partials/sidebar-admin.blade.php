<!-- sidebar menu area start -->
<aside class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.html">
                <a href="index.html"><img src="{{ asset('admin/srtdash') }}/assets/images/icon/logo.png" alt="logo"></a>
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    @foreach ($menus as $menu)
                        <li>
                            <a href="{{ route($menu['url']) }}">
                                {!! $menu['icon'] !!} <span>{{ $menu['name'] }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</aside>
<!-- sidebar menu area end -->
