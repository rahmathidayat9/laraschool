<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{ asset('img/icons') }}/laravel.jpg" alt="laravel Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Laraschool</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('img/icons') }}/codeigniter4.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('admin.index') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-header">MANAGE DATA</li>
        <li class="nav-item">
          <a href="{{ route('admin.users.index') }}" class="nav-link {{ Request::segment(2) == 'users' ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Users
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.artikel.index') }}" class="nav-link {{ Request::segment(2) == 'artikel' ? 'active' : '' }}">
            <i class="nav-icon far fa-image"></i>
            <p>
              Artikel
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.kategori-artikel.index') }}" class="nav-link {{ Request::segment(2) == 'kategori-artikel' ? 'active' : '' }}">
            <i class="nav-icon far fa-circle"></i>
            <p>
              Kategori Artikel
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.pengumuman.index') }}" class="nav-link {{ Request::segment(2) == 'pengumuman' ? 'active' : '' }}">
            <i class="nav-icon fas fa-info"></i>
            <p>
              Pengumuman
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.agenda.index') }}" class="nav-link {{ Request::segment(2) == 'agenda' ? 'active' : '' }}">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Agenda
            </p>
          </a>
        </li>

        <li class="nav-header">PENGATURAN</li>
        <li class="nav-item">
          <a href="{{ route('admin.profile.index') }}" class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card"></i>
            <p>
              Profil
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.change-password.index') }}" class="nav-link {{ Request::is('admin/change-password') ? 'active' : '' }}">
            <i class="nav-icon fas fa-unlock"></i>
            <p>
              Ubah Password
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>