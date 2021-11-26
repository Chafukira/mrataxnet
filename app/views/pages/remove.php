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
            <h1 class="m-0">Delete Taxpayer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/pages/dashboard">Home</a></li>
              <li class="breadcrumb-item active"> Delete Taxpayer</li>
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
        <!-- general form elements -->
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Delete Taxpayer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo URLROOT; ?>/taxpayers/remove" method="POST">
                <div class="card-body">

                    <span class="invalidFeedback">
                       <strong> <?php echo $data['fieldError']; ?> </strong>
                    </span>

                  <div class="form-group">
                    <label for="TPIN">Enter the TPIN of a taxpayer</label>
                    <input type="text" class="form-control" name="tpin" placeholder="TPIN">

                    
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" value="submit" class="btn btn-success">Delete Taxpayer</button>
                </div>
              </form>
            </div>
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
