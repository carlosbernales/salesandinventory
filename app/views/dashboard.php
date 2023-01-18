
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
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
                  <img src="<?= site_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Administrator</span>
                </a>
                
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?= site_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
              
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo site_url('index.php/Logincon/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
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
              <img src="<?= site_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Administrator</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
      
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Menu</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="<?= site_url('index.php/logincon/dashboard'); ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                <li><a href="<?= site_url('index.php/productcatcon/category_up'); ?>"><i class="fa fa-circle-o"></i> Product Category</a></li>
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
            Dashboard
          </h1>
          <ol class="breadcrumb">dashboard
            <li><a href="#"><i class="fa fa-"></i> Menu</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                 <h3><?php echo $category_name['category_name']?></h3>
                  <p>Categories</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-menu"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $product['product'] ?><sup style="font-size: 20px"></sup></h3>
                  <p>Products</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $caty_name['caty_name'] ?></h3>
                  <p>Product Sales</p>
                </div>
                <div class="icon">
                  <i class="ion ion-clipboard"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-maroon">
                <div class="inner">
                  <h3>&#8369; <?php echo $total_earning['total_earning'] ?></h3>
                  <p>Total Earnings</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          
       
              


             

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->




  </div><!-- /.content-wrapper -->
    <div class="pull-right hidden-xs" style="padding: 8px;">
      <b>Copyright &copy; 2022-2023 <a>BSIT 3F2 </b>
      <strong></a></strong> All rights reserved.
    </div>
    <h4 style="font-size: 14px;"><b>&nbsp;&nbsp;Mgel's Sales and Inventory</b></h4>
  </footer>
      <!-- Control Sidebar -->

    <!-- jQuery 2.1.4 -->
    <script src="<?= site_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?= site_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?= site_url(); ?>assets/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= site_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?= site_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= site_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= site_url(); ?>assets/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?= site_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?= site_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= site_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?= site_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= site_url(); ?>assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= site_url(); ?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= site_url(); ?>assets/dist/js/assets/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
      <?php if(isset($_SESSION['status'])){ ?>
      type="text/javascript">
       Swal.fire({
        position: 'center',
              title: '<?php echo $_SESSION['status'];?>',
              showConfirmButton: false,
              timer: 1500
        })
      <?php unset($_SESSION["status"]);  }?>
</script>
  </body>
</html>
