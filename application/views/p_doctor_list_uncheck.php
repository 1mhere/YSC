<!DOCTYPE html>
<html>
<!-- head  -->
  <?php include 'head.php';?>
<!-- end of head -->
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- header  -->
     <?php include 'p_doctor_header.php';?>
  <!-- end of header -->

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php include 'p_doctor_sidebar.php';?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Patient List
        <small>Unchecked in</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Patient List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Slot</th>
                  <th>Name</th>
                  <!-- <th>Number of Skip</th> -->
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data as $d) {
              		?>
                <tr>
                  <td><?php echo $d['date']; ?></td>
                  <td><?php echo $d['slot']; ?></td>
                  <td><?php echo $d['username']; ?></td>
                  <!-- <td><?php echo $d['skip']; ?></td> -->
                  <td>
                    <a href="<?php echo base_url()."index.php/doctor/skip/".$d['id']; ?>" class="btn btn-default btn-flat">Skip</a>
                    <a href="<?php echo base_url()."index.php/doctor/check_in/".$d['id']; ?>" class="btn btn-default btn-flat">Check In</a>
                  </td>
                </tr>
                <?php
                } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
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
