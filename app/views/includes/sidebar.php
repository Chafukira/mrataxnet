
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
<img src="<?php echo URLROOT; ?>/public/css//dist/img/mralogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light"><b>MAR</b> - TaxNet</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- SidebarSearch Form -->
  

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="<?php echo URLROOT; ?>/pages/dashboard" class="nav-link">
        <i class=" nav-icon uil uil-create-dashboard"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo URLROOT; ?>/taxpayers/getAll" class="nav-link">
        <i class="nav-icon uil uil-list-ul"></i>
          <p>
            View Taxpayers
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo URLROOT; ?>/pages/add" class="nav-link">
        <i class="nav-icon uil uil-user-plus"></i>
          <p>
          Add Taxpayers
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo URLROOT; ?>/pages/edit" class="nav-link">
        <i class="nav-icon uil uil-edit-alt"></i>
          <p>
          Edit Taxpayer
          </p>
        </a>

      </li>
      <li class="nav-item">
        <a href="<?php echo URLROOT; ?>/pages/remove" class="nav-link">
        <i class="nav-icon uil uil-trash-alt"></i>
          <p>
            Delete Taxpayers
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="nav-icon uil uil-user"></i>
          <p>
            Profile
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo URLROOT; ?>/user/logout" class="nav-link">
        <i class="nav-icon uil uil-sign-out-alt"></i>
          <p>
            Logout
          </p>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->