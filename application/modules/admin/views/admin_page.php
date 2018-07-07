<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel - SSO</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/media/css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" type="text/css"> -->
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Select/css/select.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/Editor/css/editor.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/AdminLTE1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/skin-blue.min.css">

    <!-- js -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      function set() {
        var path = window.location.pathname.split( '/' );
        var ok = path[3];
        
        if( ok.indexOf('_') >= 0){
            var tree = ok.split('_');
            var tree0= tree[0];
            document.getElementById("demo").innerHTML = tree[0];
            var tree1= tree[1];
            var d = document.getElementById(tree0);
            d.className += " active";
            var e = document.getElementById(tree0+2);
            e.className += " menu-open";
            var f = document.getElementById(tree1);
            f.className += " active";
        }else{
            var d = document.getElementById(ok);
            d.className += " active";
        }
      }
    </script>
  </head>

  <body class="hold-transition skin-blue fixed sidebar-mini" onload="set()">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>P</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b> Panel</span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li id="dashboard">
            <a href="dashboard">
              <i class="fa fa-calendar"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
              </span>
            </a>
          </li>
          <li id="dataadmin">
            <a href="dataadmin">
              <i class="fa fa-user"></i> <span>Admin</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
              </span>
            </a>
          </li>
          <li id="pns">
            <a href="pns">
              <i class="fa fa-users"></i> <span>PNS</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
              </span>
            </a>
          </li>
          <li id="aplikasi">
            <a href="aplikasi">
              <i class="fa fa-desktop"></i> <span>Aplikasi</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
              </span>
            </a>
          </li>
          <li id="previledge">
            <a href="previledge">
              <i class="fa fa-key"></i> <span>Previledge</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
              </span>
            </a>
          </li>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
      <div id="logout" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="background-color: #3c8dbc;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center>Konfirmasi</center></h4>
              </div>
              <div class="modal-body" style="background-color: #222d32;padding:15px;color:#fff;">
                <center>
                  <h3>Anda Yakin Ingin Keluar?</h3>
                  <a type="button" href="<?php echo base_url();?>auth/logout_adm" class="btn btn-warning">YA</a>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">BATAL</button>
                </center>
              </div>
          </div>
        </div>
      </div>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content row">
              <p id="demo"><?php echo $deskripsi; ?></p>
              <?php echo $isi; ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          SSO
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Kemenkumham</a>.</strong> All rights reserved.
      </footer> 
    </div><!-- ./wrapper --> 
    
    <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/plugins/datatables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Select/js/dataTables.select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/Editor/js/dataTables.editor.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/Editor/js/editor.bootstrap.min.js"></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>