<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()."assets"?>/dist/img/avatar04.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('username'); ?></p>
        <a>as <?php echo $this->session->userdata('status'); ?></a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">NAVIGATION</li>
      <li class="treeview">
        <a href="<?php echo base_url()."index.php/patient" ?>">
          <i class="fa fa-dashboard"></i> <span>My Appointment</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url()."index.php/patient/pHistory" ?>">
          <i class="fa fa-files-o"></i> <span>History</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/patient/pass" ?>">
          <i class="fa fa-th"></i> <span>Change Password</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/patient/instruction" ?>">
          <i class="fa fa-book"></i> <span>Help</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
