<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php?pageName=Dashboard">
        <img src="{{asset('backEnd')}}/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white"><?php //echo $title; ?></span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white <?php //if($pageName=='Dashboard'){ echo 'active bg-gradient-'.$sidebar_color;}?>" href="{{ route('dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php //if($pageName=='Tables'){ echo 'active bg-gradient-'.$sidebar_color;}?> " href="{{ route('hero') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Hero</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php //if($pageName=='Billing'){ echo 'active bg-gradient-'.$sidebar_color;}?> " href="billing.php?pageName=Billing">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">About</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php //if($pageName=='Template'){ echo 'active bg-gradient-'.$sidebar_color;}?> " href="template.php?pageName=Template">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Services</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php //if($pageName=='RTL'){ echo 'active bg-gradient-'.$sidebar_color;}?> " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Projects</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php //if($pageName=='Notifications'){ echo 'active bg-gradient-'.$sidebar_color;}?> " href="pages/notifications.html" target="_blank">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Contact</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php //if($pageName=='Profile'){ echo 'active bg-gradient-'.$sidebar_color;}?> " href="profile.php?pageName=Profile">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white <?php //if($pageName=='Sign Up'){ echo 'active bg-gradient-'.$sidebar_color;}?> " href="signup.php?pageName=Sign Up">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-<?php //echo $sidebar_color; ?> mt-4 w-100" href="#!" onclick="event.preventDefault(); document.getElementById('logout').submit();" type="button">Logout</a>
        <form action="{{route('logout')}}" method="post" id="logout">
        @csrf
        </form>
</div>
    </div>
  </aside>