<?php
include 'session.php';
include 'db.php';
$sql="SELECT * FROM `workers` WHERE `work2`='w' OR `work2`='bwp'";
$query=mysqli_query($conn,$sql);
$count=mysqli_num_rows($query);


$sql1="SELECT * FROM `users` WHERE `name`='$user'";
$query1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($query1);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Workers Hub | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
   #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
    img{
    float: left;
    margin: 5px;
    width: 250px;
    height: 180px;
   }
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="electrical.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>W</b>H</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Workers</b>HUB</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
                    <?php
        echo "<img src='images/".$row['photo']."' class='user-image'>";
      ?>
              <span class="hidden-xs"><?php echo $user; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                     <?php
        echo "<img src='images/".$row['photo']."' class='img-circle'>";
      ?>
                <p>
                  <?php echo $user; ?> -Worker's Hub
                 <!-- <small>Member since Nov. 2016</small>-->
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <!--<div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>-->
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
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
          <?php
        echo "<img src='images/".$row['photo']."' class='img-circle' >";
      ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $user; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
       
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Household Works</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li   class=""><a href="electrical.php"><i class="fa fa-circle-o"></i> Electrical Works</a></li>
            <li><a href="plumber.php"><i class="fa fa-circle-o"></i> Plumbering Works</a></li>
            <li><a href="carpenter.php"><i class="fa fa-circle-o"></i> Carpentery Works</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Electircal Works</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="television.php"><i class="fa fa-circle-o"></i>Television</a></li>
            <li><a href="ac.php"><i class="fa fa-circle-o"></i>Air Conditioners</a></li>
            <li><a href="refrigrator.php"><i class="fa fa-circle-o"></i>Refrigirators</a></li>
            <li><a href="motor.php"><i class="fa fa-circle-o"></i>Motors</a></li>
            <li class=""><a href="computer.php"><i class="fa fa-circle-o"></i>Computers</a></li>
          </ul>
        </li>
      
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Photography</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="bday.php"><i class="fa fa-circle-o"></i> Birhtday Events</a></li>
            <li class="active"><a href="weds.php"><i class="fa fa-circle-o"></i> Wedding Events</a></li>
            <li class=""><a href="party.php"><i class="fa fa-circle-o"></i> Party's </a></li>
          </ul>
        </li>   
           
  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Wedding`s</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content" style="">

        <div class="container">

               <div class="row grid">
<?php
         while($row=mysqli_fetch_array($query))
         {
        ?>
                   <div class="col-sm-4 card grid-item">
      <div class="thumbnail">
        
       <?php
         echo "<div id='img_div'>";
        echo "<img src='images/".$row['photo']."' >";
      echo "</div>";
      ?>
      <form action="workers_transact.php" method="POST">
        <div class="caption">
      <center>    <h3 id="thumbnail-label"><?php echo $row['name'];?></h3></center>
      <input type="hidden" name="email1" value="<?php echo $row['email'];?>">
          <table> 
           <tr> 
           <td>Experinece:</td>
           <td><?php echo $row['experience'];?></td> 
           </tr>
           <tr> 
           <td>Age:</td>
           <td><?php echo $row['age'];?></td> 
           </tr>
           <tr> 
           <td>mobileno:</td>
           <td><?php echo $row['phone'];?></td> 
           </tr>
          </table>
        </div>

        <div class="caption card-footer">
            <center><button class="btn btn-danger btn-md" name="transact">Contact</button></center>
        </div>

        </form>
      </div>
    </div>
<?php 
    }
         ?>
   
               </div><!-- row -->
           </div> <!-- container grid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017-2018 </strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>