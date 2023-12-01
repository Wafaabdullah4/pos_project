<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{asset('purple/assets/images/logopi.png')}}" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">Admin</span>
            <span class="text-secondary text-small">Pesan Online Siswa</span>
          </div>
         
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.home')}}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Data User</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-contacts menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('users') }}">Kurir</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/siswa') }}">Siswa</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('menu') }}">
          <span class="menu-title">Menu</span>
         
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
      </li>
   
    </ul>
  </nav>