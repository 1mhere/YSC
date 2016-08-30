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
        Instruction
        <small>To help you use this app</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Pendaftaran Slot Appointment</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <ol>
            <li>Patient login menggunakan username dan passwordnya.</li>
            <li>Patient diarahkan ke halaman yang menampilkan current appointment, jika tidak ada, maka akan tersedia tombol untuk membuat appointment baru.</li>
            <li>Patient diarahkan ke halaman yang memunculkan semua daftar doctor yang telah terdaftar. Untuk melihat berdasarkan keahliannya, pilih salah satu keahlian dari daftar lalu klik “Choose Expertise”.</li>
            <li>Patient diarahkan ke halaman yang memunculkan semua slot yang tersedia dari doctor yang telah dipilih untuk pemeriksaan.</li>
            <li>	PIlih tanggal yang dicari lalu klik tombol “Choose date” untuk menampilkan hanya slot tersedia pada tangal itu.</li>
            <li>Pilih slot yang tersedia dengan mengeklik tombol “Choose” di sebelah kanan slot yang akan dipilih.</li>
            <li>Patient diarahkan ke halaman yang menampilkan appointment yang baru saja dibuat, tersedia tombol untuk membatalkan appointment.</li>

          </ol>
        </div>
        <div class="box-footer">
        </div><!-- /.box-footer -->
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
