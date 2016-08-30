<!DOCTYPE html>
<html>
<!-- head  -->
  <?php include 'head.php';?>
<!-- end of head -->
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- header  -->
     <?php include 'header.php';?>
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
        My Appointment
        <small>The appointment you made</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Make New Appointment</h3>
        </div>
          <div class="form-group">
            <!-- form start -->
            <form class="form-horizontal" method="Post" action = "<?php echo base_url()."index.php/patient/doctorExpList" ?>">
              <div class="box-body">
                  <div class="form-group">
                    <div class="col-sm-12">
                        <label>Expertise:</label>
                          <select class="form-control" name="exp" >
                            <option>anak</option>
                            <option>gigi</option>
                            <option>mata</option>
                          </select>
                    </div>
                    <!-- /.input group -->
                  </div>
                <!-- /.form group -->
                  <?php echo $this->session->flashdata('pesan'); ?>
              </div><!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="add" class="btn btn-primary ">Choose Expertise</button>
                <a href="<?php echo base_url()."index.php/patient/doctorList" ?>" class="btn btn-primary btn-flat">Show All Doctor</a>
              </div><!-- /.box-footer -->
            </form>

            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover col-sm-4">
                <thead>
                <tr>
                  <th>Doctor</th>
                  <th>Expertise</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data as $d) {
                  ?>
                <tr>
                  <td><?php echo $d['username']; ?></td>
                  <td><?php echo $d['expertise']; ?></td>
                  <td>
                      <a href="<?php echo base_url()."index.php/patient/setDoc/".$d['username']; ?>" class="btn btn-default btn-flat">Choose</a>
                  </td>
                </tr>
                <?php
                } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- end of footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
      </div><!-- /.tab-pane -->

    </div>
  </aside><!-- /.control-sidebar -->
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
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()."assets"?>/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url()."assets"?>/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url()."assets"?>/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url()."assets"?>/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url()."assets"?>/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url()."assets"?>/plugins/iCheck/icheck.min.js"></script>

</body>
</html>
