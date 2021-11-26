<?php require APPROOT . '/views/includes/header.php';?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <?php require APPROOT . '/views/includes/navbar.php'; ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php require APPROOT . '/views/includes/sidebar.php'; ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/pages/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Registered</h3>

                <p>Taxpayers</p>
              </div>
              <div class="icon">
              <i class="ion uil uil-list-ul"></i>
              </div>
              <a href="<?php echo URLROOT; ?>/taxpayers/getAll" class="small-box-footer">View Taxpayers <i class="uil uil-angle-right-b"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Add</h3>

                <p>Taxpayers</p>
              </div>
              <div class="icon">
              <i class="ion uil uil-user-plus"></i>
              </div>
              <a href="<?php echo URLROOT; ?>/pages/add" class="small-box-footer">Add Taxpayer <i class="uil uil-angle-right-b"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Edit</h3>

                <p>Taxpayers</p>
              </div>
              <div class="icon">
              <i class="ion uil uil-edit-alt"></i>
              </div>
              <a href="<?php echo URLROOT; ?>/pages/edit" class="small-box-footer">Edit Taxpayer <i class="uil uil-angle-right-b"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Delete</h3>

                <p>Taxpayers</p>
              </div>
              <div class="icon">
              <i class="ion uil uil-trash-alt"></i>
              </div>
              <a href="<?php echo URLROOT; ?>/pages/remove" class="small-box-footer">Delete Taxpayer <i class="uil uil-angle-right-b"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <?php require APPROOT.'/views/includes/footer.php';?>
</body>
</html>
