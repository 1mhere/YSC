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
        Time Slot Registration
        <small>for patient's appointment</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6 ">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add a Slot</h3>
            </div>
            <!-- form start -->
            <form class="form-horizontal" method="Post" action = "<?php echo base_url()."index.php/doctor/addslot" ?>">
              <div class="box-body">
                <!-- Date -->
                  <div class="form-group">
                    <div class="col-sm-12">
                        <label>Date:</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                            <input type="text" class="form-control pull-right" id="datepicker2" name="tgl">
                        </div>
                        <br>
                        <label>Time:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                            </div>
                            <input type="time" class="form-control" name="slot" >
                        </div>
                      </div>
                    <!-- /.input group -->
                  </div>
                <!-- /.form group -->
                  <?php echo $this->session->flashdata('pesan'); ?>
              </div><!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" name="add" class="btn btn-primary pull-right">Add</button>
              </div><!-- /.box-footer -->
            </form>
          </div>
      </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Time Slot</h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form class="form-horizontal" method="Post" action = "<?php echo base_url()."index.php/doctor/appdate" ?>" >
              <div class="box-body">
                <!-- Date -->
                  <div class="form-group">
                    <div class="col-sm-12">
                        <label>Date:</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name="tgl">
                        </div>
                        <br>
                        <button type="submit" name="add" class="btn btn-primary ">Choose Date</button>
                        <a href="<?php echo base_url()."index.php/doctor" ?>" class="btn btn-primary btn-flat">Show All</a>
                      </div>
                    <!-- /.input group -->
                  </div>
                <!-- /.form group -->
                  <?php echo $this->session->flashdata('info'); ?>
              </div><!-- /.box-body -->
              <div class="box-footer">
                <ul>
                  <li>Choose a date from the input and click <b>Choose Date</b> to show just the chosen date appointment slot.</li>
                  <li>Click <b>Show All</b> to show all appointment slot.</li>
                </ul>
              </div><!-- /.box-footer -->
            </form>

            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover col-sm-4">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Slot</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data as $d) {
              		?>
                <tr>
                  <td><?php echo $d['date']; ?></td>
                  <td><?php echo $d['slot']; ?>0</td>
                  <td>
                      <a href="<?php echo base_url()."index.php/doctor/do_delete/".$d['id']; ?>" class="btn btn-danger btn-flat">Remove</a>
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


<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();



    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    $('#datepicker2').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });


  });
</script>

</body>
</html>
