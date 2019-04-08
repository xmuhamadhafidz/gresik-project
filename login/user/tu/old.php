<?php 
session_start();
if (empty($_SESSION['email'])){
	header('location:../index.html');	
} else {
	include "../connection.php";
?>

<?php
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "../index.html"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>
<?php } ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="Images/1.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Staff Kecamatan Curug
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://curug.id" class="simple-text logo-normal">
         KECAMATAN CURUG
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user.php">
              <i class="material-icons">person</i>
              <p>Tambah Data Penduduk</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="civs.php">
              <i class="material-icons">person</i>
              <p>Data Penduduk</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="lists.php">
              <i class="material-icons">person</i>
              <p>Daftar User</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="tables.php">
              <i class="material-icons">content_paste</i>
              <p>Daftar Pertanyaan</p>
            </a>
          </li>
            <li class="nav-item ">
            <a class="nav-link" href="daftaronline.php">
              <i class="material-icons">content_paste</i>
              <p>Pendaftaran Online</p>
            </a>
          </li>
        
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                   <?php
                    
                     $result = mysqli_query($db,"SELECT COUNT(DISTINCT NAME) AS total FROM public;");
 while($data=mysqli_fetch_array($result))
                    { ?>
                  <p class="card-category">Pelapor</p>
                  <h3 class="card-title"><?php echo $data['total']; ?>/100
                    <small>Persons</small>
                    <?php } ?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning">info</i>
                    <a href="http://curug.id">Today</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people</i>
                  </div>
                   <?php
                     
                     $result = mysqli_query($db,"SELECT COUNT(DISTINCT NAME) AS totalname FROM civilians;");
 while($data=mysqli_fetch_array($result))
                    { ?>
                  <p class="card-category">Penduduk Terdaftar</p>
                  <h3 class="card-title"><?php echo $data['totalname']; ?></h3>
                </div>
                <?php } ?>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Total 
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">question_answer</i>
                  </div>
                   <?php
                     
                     $result = mysqli_query($db,"SELECT COUNT(DISTINCT NAME) AS totalname FROM public;");
 while($data=mysqli_fetch_array($result))
                    { ?>
                  <p class="card-category">Pertanyaan</p>
                  <h3 class="card-title"><?php echo $data['totalname']; ?></h3>
                </div>
                <?php } ?>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Total
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                     <i class="material-icons">photo_library</i>
                  </div>
                   <?php
                     
                     $result = mysqli_query($db,"SELECT COUNT(*) AS new FROM uploads;");
 while($data=mysqli_fetch_array($result))
                    { ?>
                  <p class="card-category">Total Pendaftaran</p>
                  <h3 class="card-title"><?php echo $data['new']; ?></h3>
                </div><?php } ?>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                  <?php include 'chart.php'; ?>
                <!-- div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"> </div 
                </div>
                <div class="card-body">
                  <h4 class="card-title">Employee Behavior</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> Come early.</p> 
                </div -->
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> checked every time you want
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                  <?php include 'chart2.php'; ?>
                <!-- div class="card-header card-header-warning" -->
                  <!-- div class="ct-chart" id="websiteViewsChart"></div >
                </div>
                <div class="card-body">
                  <h4 class="card-title">Assets Status</h4>
                  <p class="card-category">Assets Performance</p> 
                </div -->
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> checked every time you want
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                
              <div class="card card-chart">
                <?php include 'chart3.php'; ?>  
                <!-- div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Assets and employee issues</h4>
                  <p class="card-category">Assets and employees Performance</p>
                </div -->
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> checked every time you want
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="http://curug.id">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://curug.id">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://curug.id">
                  FAQ
                </a>
              </li>
              <li>
                <a href="http://curug.id">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Made with <i class="material-icons">LOVE</i> by
            <a href="http://curug.id" target="_blank">Kecamatan Curug</a>- 2019
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>