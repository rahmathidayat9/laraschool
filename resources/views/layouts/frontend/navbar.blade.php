<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="cleverNav">

            <!-- Logo -->
            <a class="nav-brand" href="index.html"><img src="{{ asset('templates/frontend/clever') }}/img/core-img/logo.png" alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="/" class="{{ Request::is('/') || Request::is('home') ? 'text-primary' : '' }}">Home</a></li>
                        <li><a href="{{ route('about') }}" class="{{ Request::is('about') ? 'text-primary' : '' }}">Tentang</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'text-primary' : '' }}">Kontak</a></li>
                        <li><a href="{{ route('articles') }}" class="{{ Request::is('articles') ? 'text-primary' : '' }}">Artikel</a></li>
                        <li><a href="" class="{{ Request::is('pengumuman') ? 'text-primary' : '' }}">Pengumuman</a></li>
                        <li><a href="" class="{{ Request::is('agenda') ? 'text-primary' : '' }}">Agenda</a></li>
                    </ul>

                    <!-- Search Button -->
                    <div class="search-area">
                        <form action="#" method="post">
                            <input type="search" name="search" id="search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>

                    @auth
                    <div class="login-state d-flex align-items-center">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endauth

                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>