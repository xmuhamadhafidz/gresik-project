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
                  <form id="count" action="paypost.php" method="post">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">NIM</label>
                          <input type="text" name="nis" class="form-control" value="<?php echo $data ['nis']; ?>" readonly="readonly">
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
                          <label class="bmd-label-floating">GENDER</label>
                          <input type="text" name="jk" class="form-control" value="<?php echo $data ['jk']; ?>" readonly>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">TELEPON</label>
                          <input type="text" name="telp" class="form-control" value="<?php echo $data ['telp']; ?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">TAHUN MASUK</label>
                          <input type="text" name="masuk" class="form-control" value="<?php echo $data ['masuk']; ?>" readonly>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">STATUS</label>
                          <input type="text" name="status" class="form-control" value="<?php echo $data ['status']; ?>" readonly>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenjang Sekolah</label>
                          <input type="text" name="lembaga" class="form-control" value="<?php echo $data ['lembaga']; ?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jurusan Pondok</label>
                          <input type="text" name="jurusan" class="form-control" value="<?php echo $data ['jurusan']; ?>" readonly>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jurusan Madin</label>
                          <input type="text" name="kelas_d" class="form-control" value="<?php echo $data ['kelas_d']; ?>" readonly>
                        </div>
                      </div>
                    </div>

                    <!--div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">PERTANYAAN</label>
                          <input type="text"name="MESSAGES"  class="form-control" id="MESSAGES" value="<?php //echo $data ['']; ?>" disabled>
                        </div>
                      </div>
                    </div --> 

                    

                    <div class="row">
                        
                    <div class="col-md-1">
                    
                                <div class="form-group">
                                   
                                    <label class="label"><strong>SPP MTS</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="100000" name="mts_jan" onclick="totalIt()"> Januari
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" value="100000" name="mts_feb" onclick="totalIt()"> Februari 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" value="100000" name="mts_mar" onclick="totalIt()"> Maret  
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="100000" name="mts_apr" onclick="totalIt()"> April 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox"  value="100000" name="mts_mei" onclick="totalIt()"> Mei 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" value="100000" name="mts_jun" onclick="totalIt()"> Juni 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox"  value="100000" name="mts_jul" onclick="totalIt()"> Juli  
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="100000" name="mts_agu" onclick="totalIt()" > Agustus 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox"  value="100000" name="mts_sep" onclick="totalIt()"> September 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" value="100000" name="mts_okt" onclick="totalIt()" > Oktober 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="100000" name="mts_nov" onclick="totalIt()" > November
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="100000" name="mts_des" onclick="totalIt()" > Desember 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                    
                                <div class="form-group">
                                   
                                    <label class="label"><strong>Biaya</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                             100.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             100.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             100.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             100.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             100.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             100.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             100.000 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             100.000
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             100.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             100.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             100.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            100.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            


                       
                             <div class="col-md-1">
                                <div class="form-group">
                                  
                                   
                                    <label class="label"><strong>SPP MA</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"   value="125000" name="ma_jan" onclick="totalIt()"> Januari
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox"  value="125000" name="ma_feb" onclick="totalIt()"> Februari
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="125000" name="ma_mar" onclick="totalIt()"> Maret
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="125000" name="ma_apr" onclick="totalIt()"> April
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" value="125000" name="ma_mei"onclick="totalIt()"> Mei
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" value="125000" name="ma_jun" onclick="totalIt()"> Juni
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox"  value="125000" name="ma_jul" onclick="totalIt()"> Juli
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="125000" name="ma_agu" onclick="totalIt()" > Agustus
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox"  value="125000" name="ma_sep" onclick="totalIt()"> September
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="125000" name="ma_okt" onclick="totalIt()" > Oktober
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="125000" name="ma_nov" onclick="totalIt()" > November
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" value="125000" name="ma_des" onclick="totalIt()" > Desember
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                    </div>
                                     
                                </div>
                            </div>
                             <div class="col-md-2">
                    
                                <div class="form-group">
                                   
                                    <label class="label"><strong>Biaya</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                             125.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             125.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             125.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             125.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             125.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             125.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             125.000 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             125.000
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             125.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             125.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             125.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            125.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                          



                           
                        <div class="col-md-1">
                                <div class="form-group">
                                        <label class="label"><strong>SPP Aww</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"   value="27000" name="da_jan" onclick="totalIt()"> Januari
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox"  value="27000" name="da_feb" onclick="totalIt()"> Februari
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" value="27000" name="da_mar" onclick="totalIt()"> Maret
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" value="27000" name="da_apr" onclick="totalIt()"> April
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox"  value="27000" name="da_mei" onclick="totalIt()"> Mei
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="27000" name="da_jun" onclick="totalIt()"> Juni
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox"  value="27000" name="da_jul" onclick="totalIt()"> Juli
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="27000" name="da_agu" onclick="totalIt()" > Agustus
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" value="27000" name="da_sep" onclick="totalIt()"> September
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="27000" name="da_okt" onclick="totalIt()" > Oktober
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="27000" name="da_nov" onclick="totalIt()" > November
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="27000" name="da_des" onclick="totalIt()" > Desember
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                         
                              <div class="col-md-2">
                                <div class="form-group">
                                   
                                    <label class="label"><strong>Biaya</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                             27.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             27.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             27.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             27.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             27.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             27.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             27.000 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             27.000
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             27.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             27.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             27.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            27.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                           

                         
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="label"><strong>SPP Was</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"   value="30000" name="dw_jan" onclick="totalIt()"> Januari
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" value="30000" name="dw_feb" onclick="totalIt()"> Februari
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="30000" name="dw_mar" onclick="totalIt()"> Maret
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="30000" name="dw_apr" onclick="totalIt()"> April
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox"  value="30000" name="dw_mei" onclick="totalIt()"> Mei
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" value="30000" name="dw_jun" onclick="totalIt()"> Juni
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" value="30000" name="dw_jul" onclick="totalIt()"> Juli
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="30000" name="dw_agu" onclick="totalIt()" > Agustus
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox"  value="30000" name="dw_sep" onclick="totalIt()"> September
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" value="30000" name="dw_okt" onclick="totalIt()" > Oktober
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  value="30000" name="dw_nov" onclick="totalIt()" > November
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" value="30000" name="dw_des" onclick="totalIt()" > Desember
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                    
                                <div class="form-group">
                                   
                                    <label class="label"><strong>Biaya</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                             30.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             30.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             30.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             30.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             30.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             30.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             30.000 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             30.000
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             30.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             30.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             30.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            30.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                          
                        <div class="col-md-1">
                                <div class="form-group">
                                        <label class="label"><strong>SPP Q Qutub</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  name="p_qutub_jan" value="400000"  onclick="totalIt()"> Januari
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="p_qutub_feb" value="400000" onclick="totalIt()"> Februari
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_qutub_mar" value="400000"  onclick="totalIt()"> Maret
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_qutub_apr" value="400000"  onclick="totalIt()"> April
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="p_qutub_mei" value="400000"  onclick="totalIt()"> Mei
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_qutub_jun" value="400000"  onclick="totalIt()"> Juni
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="p_qutub_jul" value="400000"  onclick="totalIt()"> Juli
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_qutub_agu" value="400000"  onclick="totalIt()" > Agustus
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="p_qutub_sep" value="400000"  onclick="totalIt()"> September
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_qutub_okt" value="400000"  onclick="totalIt()" > Oktober
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_qutub_nov" value="400000"  onclick="totalIt()" > November
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_qutub_des" value="400000"  onclick="totalIt()" > Desember
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-2">
                    
                                <div class="form-group">
                                   
                                    <label class="label"><strong>Biaya</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                             400.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             400.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             400.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             400.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             400.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             400.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             400.000 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             400.000
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             400.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             400.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             400.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            400.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-1">
                                <div class="form-group">
                                   
                                    <label class="label"><strong>SPP Tahf Quran</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  name="p_quran_jan" value="450000" onclick="totalIt()"> Januari
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="p_quran_feb" value="450000" onclick="totalIt()"> Februari
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_quran_mar" value="450000" onclick="totalIt()"> Maret
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_quran_apr" value="450000" onclick="totalIt()"> April
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="p_quran_mei" value="450000" onclick="totalIt()"> Mei
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_quran_jul" value="450000" onclick="totalIt()"> Juni
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="p_quran_jul" value="450000" onclick="totalIt()"> Juli
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_quran_agu" value="75000" onclick="totalIt()" > Agustus
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="p_quran_sep" value="450000" onclick="totalIt()"> September
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_quran_okt" value="450000" onclick="totalIt()" > Oktober
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_quran_nov" value="450000" onclick="totalIt()" > November
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="p_quran_des" value="450000" onclick="totalIt()" > Desember
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        
                                    </div>
                                </div>
                            </div>
                          <div class="col-md-2">
                    
                                <div class="form-group">
                                   
                                    <label class="label"><strong>Biaya</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                             450.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             450.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             450.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             450.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             450.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             450.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             450.000 
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                             450.000
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                             450.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             450.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                             450.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            450.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                           



                          <div class="col-md-1">
                                <div class="form-group">
                                   <label class="label"><strong>Lain-Lain</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  name="uts1" value="100000" onclick="totalIt()"> UTS 1
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="uts2" value="100000" onclick="totalIt()"> UTS 2
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="uas1" value="160000" onclick="totalIt()"> UAS 1
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="uas" value="160000" onclick="totalIt()"> UAS 2
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="un" value="180000" onclick="totalIt()"> UN
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="tik" value="75000" onclick="totalIt()"> TIK
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="osis" value="75000" onclick="totalIt()"> OSIS
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox" name="mos" value="75000" onclick="totalIt()" > MOS
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="her" value="250000" onclick="totalIt()"> HER
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                       
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  name="da_u" value="50000" onclick="totalIt()"> U. Awaliyah
                                            <span class="checkmark"></span>
                                        </label> 
                                      <br>
                                        

                                        
                                        <label class="radio-container">
                                            <input id="product" type="checkbox" name="dw_u" value="50000" onclick="totalIt()"> U. Wasatiyah
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            <input id="product" type="checkbox"  name="seragam" value="1000000" onclick="totalIt()"> Seragam
                                            <span class="checkmark"></span>
                                        </label>
                                    
                                        <br>
                                    </div>
                                </div>
                        </div>


                                      <div class="col-md-2">
                                <div class="form-group">
                                   <label class="label"><strong>Biaya</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                            100
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            100
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            160.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            160.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            180.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            75.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            75.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">
                                            75.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">
                                            250.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                       
                                        <label class="radio-container m-r-45">
                                            50.000
                                            <span class="checkmark"></span>
                                        </label> 
                                      <br>
                                        

                                     
                                        <label class="radio-container">
                                            50.000
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container m-r-45">
                                            1.000.000
                                            <span class="checkmark"></span>
                                        </label>
                                    
                                        <br>
                                    </div>
                                </div>
                        </div>
                      </div>
                          

                    
                     <div class="row">

                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">PETUGAS</label>
                          <input type="text" name="petugas" class="form-control" id="petugas" value="<?php echo $_SESSION["email"];?>" disabled>
                        </div>
                      </div>
                  

<script type="text/javascript">
function totalIt() {
  var input = document.getElementById("count");
  var total = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseFloat(input[i].value);
    }
  }
  document.getElementById("total").value = "RP. " + total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');}   
</script>


                    
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">TOTAL</label>
                          
                         <strong> <h2><input type="text" name="total" class="form-control" id="total" value="0 Rupiah" readonly></h2></strong>
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