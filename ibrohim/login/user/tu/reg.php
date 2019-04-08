<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Al-Ibrohimi Tata Usaha </title>

    <!-- Icons font CSS-->
    <link href="vendor2/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor2/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor2/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor2/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css2/main.css" rel="stylesheet" media="all">
</head>


<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Tambah Siswa</h2>


                    <form method="POST" action="pushregist.php">

                        <?php
                                
                                include "../connection.php";
                                $result = mysqli_query($db, "SELECT * FROM payments WHERE nis = '$_GET[kd]'");

                                
                               ?>


                               <?php
                                 while($data2=mysqli_fetch_assoc($result)) {

                                    ?>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NIS</label>
                                    <input class="input--style-4" type="text" name="nis" value="<?php echo $data2['nis']; ?>" readonly>
                                </div>
                            </div>

                            <div class="col-2">
                               
                                 <div class="input-group">
                                    <label class="label">Nama Lengkap</label>
                                    <input class="input--style-4" type="text" name="nama" value="<?php echo $data2['nama']; ?>" readonly>
                                </div>
                               <!-- <div class="input-group">
                            <label class="label">Usia</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="usia">
                                    <option disabled="disabled" selected="selected">Usia</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div> -->


                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <div class="input-group">
                                    <label class="label">Kota</label>
                                    <input class="input--style-4" type="text" name="kota" value="<?php echo $data2['kota']; ?>" readonly="">
                                </div>

                                    <!--<label class="label">Tanggal Lahir</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="harilahir">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>-->
                                </div> 
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                     <div class="input-group">
                                    <label class="label">JK</label>
                                    <input class="input--style-4" type="text" name="jk" value="<?php echo $data2['jk']; ?>" readonly>
                                </div>
                            </div>
                            </div>

                            


                           
                               
                            <div class="col-2">
                                     <div class="input-group">
                                    <label class="label">Telepon</label>
                                    <input class="input--style-4" type="text" name="telp" value="<?php echo $data2['telp']; ?>" readonly="">
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tahun Masuk</label>
                                    <input class="input--style-4" type="text" name="telp" value="<?php echo $data2['masuk']; ?>" readonly>
                                </div>
                            </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Lembaga</label>
                                    <input class="input--style-4" type="text" name="lembaga"   value="<?php echo $data2['lembaga']; ?>"readonly>
                                </div>
                            </div>

                              
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Kelas Sekolah</label>
                                    <input class="input--style-4" type="text" name="kelas_s"   value="<?php echo $data2['kelas_s']; ?>"readonly>
                                </div>
                            </div>
                             
                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Ruang Sekolah</label>
                                    <input class="input--style-4" type="text" name="ruang_s"   value="<?php echo $data2['ruang_s']; ?>"readonly>
                                </div>
                            </div>

                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Kelas Diniyah</label>
                                    <input class="input--style-4" type="text" name="kelas_d" value ="<?php echo $data2['kelas_d'];?>" readonly>
                                </div>
                            </div>
                        </div>



                                <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Ruang Diniyah</label>
                                    <input class="input--style-4" type="text" name="ruang_d"   value="<?php echo $data2['ruang_d']; ?>"readonly>
                                </div>
                            </div>

                            
                          

                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Jurusan</label>
                                    <input class="input--style-4" type="text" name="inst" value="<?php echo $data2['jurusan']; ?>"readonly >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Status</label>
                                    <input class="input--style-4" type="text" name="korlap" value ="<?php echo $data2['status'];?>" readonly="readonly">
                                </div>
                            </div>

                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Staff</label>
                                    <input class="input--style-4" type="text" name="korlap" value ="<?php echo $_SESSION["user"]; ?>" readonly="readonly">
                                </div>
                            </div>
<!--//////////////  /////////////// ////////////////    /////////////////   /-->
        
                           
                    
                        

                              <div class="col-2">
                                <div class="input-group">
                                    <br>
                                    <hr>
                                    <label class="label"><strong>Pembayaran Sekolah</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">SPP MA
                                            <input name="product" type="checkbox"  name="price" value="125.000" onclick="totalIt()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">SPP MTs
                                            <input name="product" type="checkbox" name="price"" value="100.000" onclick="totalIt()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">Ujian UTS
                                            <input name="product" type="checkbox" name="price" value="100.000" onclick="totalIt()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        

                                        <label class="radio-container m-r-45">Ujian UAS
                                            <input name="product" type="checkbox" name="price" value="160.000" onclick="totalIt()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">Ujian Nasional
                                            <input name="product" type="checkbox" name="price" value="180.000" onclick="totalIt()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">TIK
                                            <input name="product" type="checkbox" name="price" value="75.000" onclick="totalIt()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">MOS
                                            <input name="product" type="checkbox" name="price" value="75.000" onclick="totalIt()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">OSIS
                                            <input name="product" type="checkbox" name="price" value="75.000" onclick="totalIt()" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">HER
                                            <input name="product" type="checkbox" name="price" value="250.000" onclick="totalIt()">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            

                           <script type="text/javascript">
function totalIt() {
  var input = document.getElementsByName("product");
  var total = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseFloat(input[i].value);
    }
  }
  document.getElementById("total").value = "RP. " + total.toFixed(3);
}   
</script>

                        
                             <div class="col-2">
                                <div class="input-group">
                                    <br>
                                    <hr>
                                    <label class="label"><strong>Total Biaya Sekolah</strong></label>
                                    <br>
                                    <input class="input--style-4" type="text" name="amount" id="total" value="0 Rupiah" readonly> 
                                </div>
                           

                           <div class="input-group">
                            <label class="label">Bulan</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="usia">
                                    <option disabled="disabled" selected="selected">Bulan</option>
                                    <option>Januari</option>
                                    <option>Februari</option>
                                    <option>Maret</option>
                                    <option>April</option>
                                    <option>Mei</option>
                                    <option>Juni</option>
                                    <option>Juli</option>
                                    <option>Agustus</option>
                                    <option>September</option>
                                    <option>Oktober</option>
                                    <option>November</option>
                                    <option>Desember</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div>
                      

                              <div class="col-2">
                                <div class="input-group">
                                    <br>
                                     <hr>
                                    <label class="label"><strong>Pembayaran Pondok</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">SPP Qiroatil Qutub
                                            <input name="product2" type="checkbox"  name="price" value="400.000" onclick="totalIt2()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">SPP Tahfidzul Quran
                                            <input name="product2" type="checkbox" name="price"" value="450.000" onclick="totalIt2()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">Seragam
                                            <input name="product2" type="checkbox" name="price" value="1000.000" onclick="totalIt2()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        

                                       
                                    </div>
                                </div>
                            </div>
                            

                           <script type="text/javascript">
function totalIt2() {
  var input2 = document.getElementsByName("product2");
  var total2 = 0;
  for (var a = 0; a < input2.length; a++) {
    if (input2[a].checked) {
      total2 += parseFloat(input2[a].value);
    }
  }
  document.getElementById("total2").value = "RP. " + total2.toFixed(3);
}   
</script>

                        
                             <div class="col-2">
                                <div class="input-group">
                                     <br>
                                     <hr>
                                    <label class="label"><strong>Total Biaya Pondok</strong></label>
                                    <br>
                                    <input class="input--style-4" type="text" name="amount" id="total2" value="0 Rupiah" readonly> 
                                </div>
                             <div class="input-group">
                            <label class="label">Bulan</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="usia">
                                    <option disabled="disabled" selected="selected">Bulan</option>
                                    <option>Januari</option>
                                    <option>Februari</option>
                                    <option>Maret</option>
                                    <option>April</option>
                                    <option>Mei</option>
                                    <option>Juni</option>
                                    <option>Juli</option>
                                    <option>Agustus</option>
                                    <option>September</option>
                                    <option>Oktober</option>
                                    <option>November</option>
                                    <option>Desember</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div>





                            <div class="col-2">
                                <div class="input-group">
                                    <br>
                                     <hr>
                                    <label class="label"><strong>Pembayaran Madin</strong></label>

                                    <br>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">SPP Awwaliyah
                                            <input name="product3" type="checkbox"  name="price" value="27.000" onclick="totalIt3()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="radio-container">Ujian Awwaliyah
                                            <input name="product3" type="checkbox" name="price"" value="50.000" onclick="totalIt3()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>

                                        <label class="radio-container m-r-45">SPP Wasatiyah
                                            <input name="product3" type="checkbox" name="price" value="30.000" onclick="totalIt3()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        

                                        <label class="radio-container m-r-45">Ujian Wasayiyah
                                            <input name="product3" type="checkbox" name="price" value="50.000" onclick="totalIt3()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        
                                    </div>
                                </div>
                            </div>
                            

                           <script type="text/javascript">
function totalIt3() {
  var input3 = document.getElementsByName("product3");
  var total3 = 0;
  for (var a = 0; a < input3.length; a++) {
    if (input3[a].checked) {
      total3 += parseFloat(input3[a].value);
    }
  }
  document.getElementById("total3").value = "RP. " + total3.toFixed(3);
}   
</script>

                        
                             <div class="col-2">
                                <div class="input-group">
                                     <br>
                                     <hr>
                                    <label class="label"><strong>Total Biaya Madin</strong></label>
                                    <br>
                                    <input class="input--style-4" type="text" name="amount" id="total3" value="0 Rupiah" readonly> 
                                </div>
                             <div class="input-group">
                            <label class="label">Bulan</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="usia">
                                    <option disabled="disabled" selected="selected">Bulan</option>
                                    <option>Januari</option>
                                    <option>Februari</option>
                                    <option>Maret</option>
                                    <option>April</option>
                                    <option>Mei</option>
                                    <option>Juni</option>
                                    <option>Juli</option>
                                    <option>Agustus</option>
                                    <option>September</option>
                                    <option>Oktober</option>
                                    <option>November</option>
                                    <option>Desember</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div>

                            


                            <?php

                        }
                        ?>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor2/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor2/select2/select2.min.js"></script>
    <script src="vendor2/datepicker/moment.min.js"></script>
    <script src="vendor2/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js2/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->