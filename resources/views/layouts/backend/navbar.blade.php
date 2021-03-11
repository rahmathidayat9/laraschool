<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-fw fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">{{ auth()->user()->email }}</span>
        <div class="dropdown-divider"></div>
        <a href="{{ route('admin.profile.index') }}" class="dropdown-item">
          <i class="fas fa-fw fa-user mr-2"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="/" target="_blank" class="dropdown-item">
          <i class="fas fa-fw fa-home mr-2"></i> Website
        </a>
        <div class="dropdown-divider"></div>
        <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-fw fa-sign-out-alt mr-2"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>