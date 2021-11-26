<?php
    require APPROOT . '/views/includes/header.php';
?>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="#" class="h4"><b>MRA</b> - TaxNet</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo URLROOT; ?>/users/login" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="uil uil-envelope-alt"></span>
              <br>
            </div>
          </div>
          
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span<i class="uil uil-padlock"></i></span>
            </div>
          </div>

          <span class="invalidFeedback">
                <?php echo $data['fieldError']; ?>
          </span>

        </div>

        <div class="row">
          <div class="col-4">
            <button type="submit" value="submit" class="btn btn-success btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>

      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo URLROOT; ?>/public/css/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo URLROOT; ?>/public/css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo URLROOT; ?>/public/css/dist/js/adminlte.min.js"></script>
</body>
</html>
