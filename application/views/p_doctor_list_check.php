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

     <!-- for calling process -->
      <script src="http://code.responsivevoice.org/responsivevoice.js"></script>

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
        <small>Checked in</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Calling Process</h3> -->
              <!-- <a href="" class="btn btn-default btn-flat pull-right"  onclick="berhenti();">End</a>
              <a href="" class="btn btn-default btn-flat pull-right" onclick="panggil('1mhere');">Begin</a> -->
              <ul>
                <li>Click <b>Call</b> to Call Patient.</li>
                <li>Click <b>Not Show</b> if patient not show to the medcheck room after calling limit exceeded.</li>
                <li>Click <b>Done</b> if patient has already come to medcheck room.</li>
              </ul>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Slot</th>
                  <th>Name</th>
                  <th>Skip</th>
                  <th>Late</th>
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
                  <td><?php echo $d['skip']; ?></td>
                  <td><?php echo $d['late']; ?></td>
                  <td><?php echo date('H:i:s'); ?></td>

                  <td>
                    <a class="btn btn-default btn-flat" data-toggle="modal" data-target= "#modalDone" onclick="panggil('<?php echo $d['username']; ?>');">Call</a>
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


  <script>
    function panggil(n){
        responsiveVoice.cancel();
        for (var i = 0; i < 5; i++) {
            responsiveVoice.speak("Kepada pasien atas nama "+n+" untuk masuk ruangan pemeriksaan", "Indonesian Female" );
        }
    }
    function berhenti(){
        responsiveVoice.cancel();
    }

  </script>
</body>
<!--modal-->
  <div class="modal fade modal modal-primary" data-backdrop="" id="modalDone" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title"><b>Let's</b>Queue Here App</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <ul class="list-group">
                <h5>Calling patient with username <?php echo $d['username']; ?>...</h5>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <form>
              <a href="<?php echo base_url()."index.php/doctor/not_show/".$d['id']; ?>" class="btn btn-outline" onclick="berhenti();">Not Show</a>
            <a href="<?php echo base_url()."index.php/doctor/done/".$d['id']; ?>" class="btn btn-outline" onclick="berhenti();">Show</a>
          </form>
        </div>
      </div>
    </div>
</div>
</html>
