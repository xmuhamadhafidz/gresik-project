<?php 
session_start();
include "../connection.php";
//if (empty($_SESSION['user'])){
//	header('location:../index.html');	
//} 
?>
<?php
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "../index.html"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
//if (isset($_SESSION['start_time'])) {
//    $elapsed_time = time() - $_SESSION['start_time'];
//    if ($elapsed_time >= $timeout) {
//        session_destroy();
//        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
 //   }
//}
$_SESSION['start_time'] = time();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="Images/1.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Al-Ibrohimi
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
        <a href="index.php" class="simple-text logo-normal">
          Al-Ibrohimi TU
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
         
                   <li class="nav-item   ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Home</p>
            </a>
          </li>
          
          
          <li class="nav-item active" >
            <a class="nav-link" href="history.php">
              <i class="material-icons">person</i>
              <p>Daftar Siswa</p>
            </a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">library_books</i>
                  <span class="notification">Invoice</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Invoice Sekolah</a>
                  <a class="dropdown-item" href="#">Invoice Madin</a>
                  <a class="dropdown-item" href="#">Invoice Pondok</a>
                  <a class="dropdown-item" href="#">Record</a>
                  <a class="dropdown-item" href="#">Dan lain-lain</a>
                </div>
              </li>
              
  
               <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">warning</i>
              <p>Logout</p>
              
            </a>
          </li>             
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          

          <div class="collapse navbar-collapse justify-content-end">
            

            <form class="navbar-form" method="POST" action="history.php">
              <div class="input-group no-border">


                <input type="text" name="q" class="form-control" placeholder="Search...">
               

                <button type="submit" name="search" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">

             
              <li class="nav-item">
                <a class="nav-link" href="profil.php">
                  <i class="material-icons">person</i>
                  <p>Account</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar Siswa</h4>
                  <p class="card-category">Student List</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                         
                     <?php
              
                            $con = mysqli_connect("localhost", "root", "", "payment") or die (mysqli_error());
            
              
                        if(isset($_POST['search'])){
                          $q = $_POST['q'];
                          $data = mysqli_query($con, "SELECT * FROM payments WHERE nama LIKE'%$q%' ORDER BY nama Desc") or die (mysqli_error());
                          $list = 1;
                          
                        
                         

                     //$result = mysqli_query($db,"SELECT * FROM kids WHERE email = '".$_SESSION['user']."'");


?>
                    <thead class="text-warning">
                      <th>NIS</th>
                      <th>NAMA</th>
                      <th>GENDER</th>
                      <th>TELP</th>
                      <th>MASUK</th>
                      <th>LEMBAGA</th>
                      <th>KELAS DINIYAH</th>
                      <th>JURUSAN</th>
                 
                     <th>PAYMENT GATEWAY</th>
                     
                     
                      
                      
                     
                    </thead>
                    <tbody>
                         <?php while($info=mysqli_fetch_array($data))
                    { ?>
                    <tr>
                    <td><a href="detail.php?hal=edit&kd=<?php echo $info['nis'];?>"><?php echo $info['nis']; ?></a></td>
                    <td><?php echo $info['nama']; ?></td>
                    <td><?php echo $info['jk']; ?></td>
                    <td><?php echo $info['telp']; ?></td>
                    <td><?php echo $info['masuk']; ?></td>
                    <td><?php echo $info['lembaga']; ?></td>
                    <td><?php echo $info['kelas_d']; ?></td>
                    <td><?php echo $info['jurusan']; ?></td>
                   
                    <td><a class="btn btn-sm btn-primary" href="qa.php?hal=edit&kd=<?php echo $info['nis'];?>"><i class="fa fa-edit"></i> MA</a>
                     
                        <a class="btn btn-sm btn-primary" href="mtspay.php?hal=edit&kd=<?php echo $info['nis'];?>"><i class="fa fa-edit"></i> MTS</a>
                        <br>
                        <a class="btn btn-sm btn-primary" href="dapay.php?hal=edit&kd=<?php echo $info['nis'];?>"><i class="fa fa-edit"></i> AW</a>
                        &nbsp;
                        <a class="btn btn-sm btn-primary" href="dwpay.php?hal=edit&kd=<?php echo $info['nis'];?>"><i class="fa fa-edit"></i> WA</a>
                        <br>
                        <a class="btn btn-sm btn-primary" href="qutubpay.php?hal=edit&kd=<?php echo $info['nis'];?>"><i class="fa fa-edit"></i> QQ</a>
                        &nbsp;
                        <a class="btn btn-sm btn-primary" href="quranpay.php?hal=edit&kd=<?php echo $info['nis'];?>"><i class="fa fa-edit"></i> TQ</a>
                        
                 
                      <br>

                     
                   
            
                   
                   
                   
                </tr>   
                 <?php   
              }
            }
              ?> </tbody>
                    </table>
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
            </script>, Made with <i class="material-icons-love">LOVE</i> by
            <a href="http://curug.id" target="_blank">Rishaldy</a>- 2019
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