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
  <?php include 'p_doctor_sidebar.php';?>

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
            <li>User login menggunakan akun berstatus doctor(dalam hal ini username : Doctor1, password : doctor1).</li>
            <li>Masuk halaman Available Slot,  masukkan tanggal dan jam untuk slot yang akan didaftarkan di bagian add slot(bagian kanan).</li>
            <li>Keseluruhan slot yang sudah didaftarkan akan terlihat ditabel di bagian kanan.</li>
            <li>Untuk melihat berdasarkan tanggalnya, pilih tanggal lalu klik “Choose Date”.</li>
          </ol>
        </div>
        <div class="box-footer">
        </div><!-- /.box-footer -->
        </div>
        <!-- /.box -->
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Pemanggilan Pasien</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <ol>
              <li>Klik tab patient list, lalu pilih unchecked list.</li>
              <li>Doctor akan diarahkan ke halaman yang menampilkan semua list appointment beserta nama pasiennya, diurutkan berdasarkan jumlah skip(skip bertambah ketika dia tidak datang sesuai appointment yang dibuat) lalu waktu slotnya.</li>
              <li>Jika Pasien terlambat atau tidak datang sesuai slot appointment, maka klik tombol “Skip” dibagian kanan username pasien yang bersangkutan. Pasien tersebut akan berpindah ke bagian paling bawah tabel dan jumlah skip akan bertambah 1.</li>
              <li>Jika Pasien telah datang sesuai slot appointment, maka tombol “Checkin” dibagian kanan username pasien yang bersangkutan. Pasien akan pindah ke daftar pasien yang telah check in.</li>
              <li>Setelah mendata semua pasien yang telah datang(check in), lihat halaman checked in yang menampilkan daftar pasien yang telah check in, diurutkan berdasarkan jumlah skip dan waktu slot. </li>
              <li>Pilih “Call” untuk memanggil pasien. Lakukan sesuai urutan dari atas kebawah.</li>
              <li>Jika pasien hadir ke ruangan pemeriksaan, maka pilih tombol “Done”. Pasien akan terhapus dari patient list doctor, dan tersimpan di history pasien yang bersangkutan.</li>
              <li>Jika pasien tidak hadir ke ruangan pemeriksaan, maka pilih tombol “Not Show”. Pasien akan kembali ke daftar pasien yang belum check in, dan jumlah skip bertambah 1.</li>
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
