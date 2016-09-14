<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()."assets"?>/dist/img/avatar5.png" class="img-circle" alt="User Image">
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
        <a href="<?php echo base_url()."index.php/doctor/list_Uncheck" ?>">
          <i class="fa fa-circle-o"></i> <span>Checkin</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url()."index.php/doctor/list_Check"?>">
          <i class="fa fa-files-o"></i>
          <span>Calling</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/doctor" ?>">
          <i class="fa fa-dashboard"></i> <span>Time Slot Registration</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/doctor/pass" ?>">
          <i class="fa fa-th"></i> <span>Change Password</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/doctor/instruction" ?>">
          <i class="fa fa-book"></i> <span>Help</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
