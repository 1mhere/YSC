<!DOCTYPE html>
<html>
<!-- head  -->
  <?php include 'head.php';?>
<!-- end of head -->
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- header  -->
     <?php include 'p_patient_header.php';?>
  <!-- end of header -->

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php include 'p_patient_sidebar.php';?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Password
        <small>To secure your account</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Password</h3>
        </div>
        <!-- form start -->
        <div class="form-group">
          <?php foreach ($data as $d) {
          ?>
              <h5>&nbsp Doctor : </h5>
              <h2>&nbsp <?php echo $d['doctor']; ?></h2>
              <h5>&nbsp Date : </h5>
              <h2>&nbsp <?php echo $d['date']; ?></h2>
              <h5>&nbsp Slot : </h5>
              <h2>&nbsp <?php echo $d['slot']; ?></h2>
                <br>
              &nbsp <a href="<?php echo base_url()."index.php/patient/cancelApp/".$d['id'] ;?>" class="btn btn-danger btn-flat">Cancel Appointment</a>
          <?php
          } ?>
          <h5>.</h5>
        </div>

        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- end of footer -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."assets"?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."assets"?>/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."assets"?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets"?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets"?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets"?>/dist/js/demo.js"></script>
</body>
</html>
