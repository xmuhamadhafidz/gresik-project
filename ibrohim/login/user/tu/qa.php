

<!DOCTYPE html>
<html lang="en">

<?php 
session_start();
//if (empty($_SESSION['username'])){
//  header('location: http://.html'); 
//} else {
  include "../connection.php";
?>

<?php
//$timeout = 10; // Set timeout minutes
//$logout_redirect_url = "../index.html"; // Set logout URL

//$timeout = $timeout * 60; // Converts minutes to seconds
//if (isset($_SESSION['start_time'])) {
 //   $elapsed_time = time() - $_SESSION['start_time'];
  //  if ($elapsed_time >= $timeout) {
   //     session_destroy();
    //    echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
  //  }
//}
//$_SESSION['start_time'] = time();
?>
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
<script type="text/javascript">
// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});

</script>



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

 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Pembayaran</h4>
                  <p class="card-category"></p>
                </div>
                <?php
                    
                     $result = mysqli_query($db,"SELECT * FROM payments WHERE nis = '$_GET[kd]'");
                ?>
                <?php while($data=mysqli_fetch_array($result))
                    { ?>
               <div class="card-body">
                  <form action="update.php" method="post">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">NIS</label>
                          <input type="text" name="nis" class="form-control" id="nis" value="<?php echo $data ['nis']; ?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">NAMA</label>
                          <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $data ['nama']; ?>" disabled>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">JENIS KELAMIN</label>
                          <input type="email" name="jk" class="form-control" id="jk" value="<?php echo $data ['jk']; ?>" disabled>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">TELEPON</label>
                          <input type="text" name="telp" class="form-control" id="telp" value="<?php echo $data ['telp']; ?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">MASUK</label>
                          <input type="text" name="masuk" class="form-control" id="masuk" value="<?php echo $data ['masuk']; ?>" disabled>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">JENJANG</label>
                          <input type="text" name="EMAIL" class="form-control" id="EMAIL" value="<?php echo $data ['lembaga']; ?>" disabled>
                        </div>
                      </div>
                    </div>
                    
                       




                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label></label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> PEMBAYARAN</label>
                            <input type="text" class="form-control" name="RESPON" id="RESPON" value="<?php echo $data ['']; ?>" disabled>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="row">


                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP JANUARI</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP FEBRUARI</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP MARET</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP APRIL</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP MEI</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP JUNI</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP JULI</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP AGUSTUS</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP SEPTEMBER</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP OKTOBER</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP NOVEMBER</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP DESEMBER</label>
                          <input type="text" name="mts_jan" class="form-control" id="mts_jan" value="<?php echo $data ['mts_jan']; ?>">
                        </div>
                      </div>





                    </div>   






                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label></label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Please type additional information here. Max 200 Characters</label>
                            <input type="text" class="form-control" name="RESPON" id="RESPON" value="<?php echo $data ['']; ?>">
                          </div>
                        </div>
                      </div>
                    </div>
           
                    
                     <div class="row">

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">PETUGAS</label>
                          <input type="text" name="OFFICER" class="form-control" id="OFFICER" value="<?php echo $_SESSION["user"];?>" disabled>
                        </div>
                      </div>
                    </div>
                    <?php   
              }
              ?>
                    <button type="submit" class="btn btn-primary pull-right">Save Data</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>


            <!--div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="Images/1.png" >
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">KECAMATAN CURUG</h6>
                  <h4 class="card-title">Halo Admin</h4>
                  <p class="card-description">
                    Silakan Jawab Pertanyaan Dari Warga Kecamatan Curug
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Learn more</a>                
              </div>
            </div>
          </div-->



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
            <a href="http:/curug.id" target="_blank">Rishaldy</a>- 2019
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