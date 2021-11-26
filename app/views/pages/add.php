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
            <h1 class="m-0">Add Taxpayer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Taxpayer</li>
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
                <h3 class="card-title">Add Taxpayer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo URLROOT; ?>/taxpayers/add" method="POST">
                <div class="card-body">

                    <span class="invalidFeedback">
                       <strong> <?php echo $data['fieldError']; ?> </strong>
                    </span>

                  <div class="form-group">
                    <label for="TPIN">TPIN</label>
                    <input type="text" class="form-control" name="tpin" placeholder="TPIN">

                    
                  </div>

                  <div class="form-group">
                    <label for="BusinessCertificateNumber">Business Certificate Number</label>
                    <input type="text" class="form-control" name="businesscert" placeholder="BusinessCertificateNumber">

                    
                  </div>

                  <div class="form-group">
                    <label for="TradingName">Trading Name</label>
                    <input type="text" class="form-control" name="tradename" placeholder="TradingName">

                    
                  </div>

                  <div class="form-group">
                    <label for="TradingName">Business Registration Date</label>
                    <input type="date" class="form-control" name="regdate" placeholder="Example: 2021/10/08">

                  </div>

                  <div class="form-group">
                    <label for="MobileNumber">Mobile Number</label>
                    <input type="text" class="form-control" name="number" placeholder="MobileNumber">

                    
                  </div>

                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">

                    
                  </div>

                  <div class="form-group">
                    <label for="PhysicalLocation">Physical Location</label>
                    <input type="text" class="form-control" name="location" placeholder="PhysicalLocation">

                    
                  </div>

                  <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="email" class="form-control" name="username" placeholder="Username">
                  </div>

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" value="submit" class="btn btn-success">Add Taxpayer</button>
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
