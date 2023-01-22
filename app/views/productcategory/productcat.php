<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sales and Inventory</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a  class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SI</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Sales and Inventory</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
             

              <!-- Tasks: style can be found in dropdown.less -->
 
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?= site_url(); ?>assets/dist/img/avatar5.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">Administrator</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?= site_url(); ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                    <p>
                    Mgel's Store
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo site_url('index.php/Logincon/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?= site_url(); ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Administrator</p>
              <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Menu</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="<?= site_url('index.php/logincon/dashboard'); ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                <li  class="active"><a href="<?= site_url('index.php/productcatcon/category_up'); ?>"><i class="fa fa-circle-o"></i> Product Category</a></li>
                <li><a href="<?= site_url('index.php/productcon/product_up'); ?>"><i class="fa fa-circle-o"></i> Products</a></li>
                <li><a href="<?= site_url('index.php/stockscon/stock_up'); ?>"><i class="fa fa-circle-o"></i> Stocks</a></li>
                <li><a href="<?= site_url('index.php/salescon/sales'); ?>"><i class="fa fa-circle-o"></i> Sales</a></li>
                <li><a href="<?= site_url('index.php/salesrepcon/retrievesales'); ?>"><i class="fa fa-circle-o"></i> Sales Report</a></li>
              </ul>
            </li>
            
        <!-- /.sidebar -->
      </aside>
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            List of Product Category
          </h1>
          <div>
            <a href="<?= site_url('index.php/productcatcon/add_category'); ?>" class="btn btn-primary mt-5 mb-2">Add New Category</a>
            </div>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
            <li><a href="#">Product Category</a></li>
          </ol>
        </section>



        <!-- Main content -->
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Category Name</th>
                        <th>Date Created</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $datum): ?>
                      <tr>
                          <td><?=$datum['category_name'];?></td>
                          <td><?=$datum['created_at'];?></td>
                      </tr>
                  <?php endforeach; ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div>


  </div><!-- /.content-wrapper -->
  <div class="pull-right hidden-xs" style="padding: 8px;">
      <b>Copyright &copy; 2022-2023 <a>BSIT 3F2 </b>
      <strong></a></strong> All rights reserved.
    </div>
    <h4 style="font-size: 14px;"><b>&nbsp;&nbsp;Mgel's Sales and Inventory</b></h4>
  </footer>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
 
            </ul><!-- /.control-sidebar-menu -->
          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
    <!-- jQuery 2.1.4 -->
    <!-- jQuery 2.1.4 -->
    <script src="<?= site_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?= site_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?= site_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= site_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?= site_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= site_url(); ?>assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= site_url(); ?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= site_url(); ?>assets/dist/js/demo.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      <?php if(isset($_SESSION['status'])){ ?>
      type="text/javascript">
        Swal.fire({
              position: 'top-end',
              icon: '<?php echo $_SESSION['status_code'];?>',
              title: '<?php echo $_SESSION['status'];?>',
              showConfirmButton: false,
              timer: 1500
            })
      <?php unset($_SESSION["status"]);  }?>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
