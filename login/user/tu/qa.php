<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
//if (empty($_SESSION['username'])){
//  header('location: http://.html'); 
//} else {
  include "../connection.php";
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
            <?php
                    
                     $result = mysqli_query($db,"SELECT * FROM payments WHERE nis = '$_GET[kd]'");
                ?>
                <?php while($data=mysqli_fetch_array($result))
                    { ?>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Pembayaran MA</h4> 
                  <p class="card-category"><?php echo $data ['status']; ?></p>
                </div>
                
               <div class="card-body">
                  <form action="post.php" method="post">
                    <div class="row">
                      

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">NIS</label>
                          <input type="text" name="nis" class="form-control" value="<?php echo $data ['nis']; ?>" readonly>
                        </div>
                      </div>

                     
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">NAMA</label>
                          <input type="text" name="nama" class="form-control" value="<?php echo $data ['nama']; ?>" readonly>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">JENIS KELAMIN</label>
                          <input type="email" name="jk" class="form-control" value="<?php echo $data ['jk']; ?>" readonly>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">JURUSAN PONDOK</label>
                          <input type="text" name="jurusan" class="form-control" value="<?php echo $data ['jurusan']; ?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">KELAS DINNIYAH</label>
                          <input type="text" name="kelas_d" class="form-control" value="<?php echo $data ['kelas_d']; ?>" readonly>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">JENJANG</label>
                          <input type="text" name="lembaga" class="form-control"  value="<?php echo $data ['lembaga']; ?>" readonly>
                        </div>
                      </div>
                    </div>
                    
                       




                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label></label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> PEMBAYARAN SPP</label>
                            <input type="text" class="form-control" name="RESPON" id="RESPON" readonly>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="row">


                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP JANUARI</label>
                          <input type="text" name="ma_jan" class="form-control"  value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP FEBRUARI</label>
                          <input type="text" name="ma_feb" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP MARET</label>
                          <input type="text" name="ma_mar" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP APRIL</label>
                          <input type="text" name="ma_apr" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP MEI</label>
                          <input type="text" name="ma_mei" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP JUNI</label>
                          <input type="text" name="ma_jun" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP JULI</label>
                          <input type="text" name="ma_jul" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP AGUSTUS</label>
                          <input type="text" name="ma_agu" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP SEPTEMBER</label>
                          <input type="text" name="ma_sep" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP OKTOBER</label>
                          <input type="text" name="ma_okt" class="form-control" value="0">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP NOVEMBER</label>
                          <input type="text" name="ma_nov" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">SPP DESEMBER</label>
                          <input type="text" name="ma_des" class="form-control" value="0" >
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label></label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> PEMBAYARAN LAIN-LAIN</label>
                            <input type="text" class="form-control" name="RESPON" id="RESPON" readonly>
                          </div>
                        </div>
                      </div>
                    </div>


                     <div class="row">
                       <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">UTS 1</label>
                          <input type="text" name="uts1" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">UTS 2</label>
                          <input type="text" name="uts2" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">UAS 1</label>
                          <input type="text" name="uas1" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">UAS 2</label>
                          <input type="text" name="uas2" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">UN</label>
                          <input type="text" name="un" class="form-control" value="0">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">HER</label>
                          <input type="text" name="her" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">TIK</label>
                          <input type="text" name="tik" class="form-control" value="0" >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">MOS</label>
                          <input type="text" name="mos" class="form-control" value="0" >
                        </div>
                      </div>

                       <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">OSIS</label>
                          <input type="text" name="osis" class="form-control" value="0" >
                        </div>
                      </div>

                      





                    </div>   






                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label></label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Please type additional information here. Max 200 Characters</label>
                            <input type="text" class="form-control" name="notes">
                          </div>
                        </div>
                      </div>
                    </div>
           
                    
                     <div class="row">

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">PETUGAS</label>
                          <input type="text" name="petugas" class="form-control" value="<?php echo $_SESSION["email"];?>" readonly>
                        </div>
                      </div>


                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">TOTAL</label>
                          <input type="text" value="Rp. 0" class="form-control" id="total" name="total" readonly><a href="javascript:sumInputs()">Sum</a>
                        </div>
                      </div>
                    </div>



<script type="text/javascript">
window.sumInputs = function() {
    var inputs = document.getElementsByTagName('input'),
        result = document.getElementById('total'),
        sum = 0;            
    
    for(var i=0; i<inputs.length; i++) {
        var ip = inputs[i];
    
        if (ip.name && ip.name.indexOf("total") < 0) {
            sum += parseInt(ip.value) || 0;
        }
    
    }
    
    result.value = sum.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
}
 // document.getElementById("total").value = "RP. " + total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');}   
</script>
                   
                    <button type="submit" class="btn btn-primary pull-right">Save Data</button>
                    
                    <div class="clearfix"></div>
                      <?php   
              }
              ?>
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
                <a href="http://sleekwave.net" target="_blank">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://sleekwave.net" target="_blank">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://sleekwave.net" target="_blank">
                  FAQ
                </a>
              </li>
              <li>
               <a href="http://sleekwave.net" target="_blank">
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