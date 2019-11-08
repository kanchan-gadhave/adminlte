<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- kanchan this is changed by me -->
   <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Demo Project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item">
                <a href="{{ URL::route('dashboard')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::route('home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User profiles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::route('chart')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mail</p>
                </a>
              </li>
            </ul>
          </li>
   
     
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>