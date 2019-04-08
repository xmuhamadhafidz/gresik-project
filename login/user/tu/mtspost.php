<?php

include "../connection.php";


$nis           = $_POST['nis'];

$nama           = $_POST['nama'];

$jk        		= $_POST['jk'];


$lembaga		= $_POST['lembaga'];

$jurusan		= $_POST['jurusan'];

$kelas_d		= $_POST['kelas_d'];



$ma_jan		= $_POST['ma_jan'];

$ma_feb		= $_POST['ma_feb'];

$ma_mar		= $_POST['ma_mar'];

$ma_apr		= $_POST['ma_apr'];

$ma_mei		= $_POST['ma_mei'];

$ma_jun		= $_POST['ma_jun'];

$ma_jul		= $_POST['ma_jul'];

$ma_agu		= $_POST['ma_agu'];

$ma_sep		= $_POST['ma_sep'];

$ma_okt		= $_POST['ma_okt'];

$ma_nov		= $_POST['ma_nov'];

$ma_des		= $_POST['ma_des'];

$petugas	= $_POST['petugas'];

$total	= $_POST['total'];
$notes	= $_POST['notes'];


$uts1	= $_POST['uts1'];
$uts2	= $_POST['uts2'];
$uas1	= $_POST['uas1'];
$uas2	= $_POST['uas2'];
$un	= $_POST['un'];
$her	= $_POST['her'];

$mos	= $_POST['mos'];
$tik	= $_POST['tik'];
$osis	= $_POST['osis'];




$query = mysqli_query($db, "INSERT INTO mts (nis, nama, jk, lembaga, jurusan, kelas_d, jan, feb, mar, apr, mei, jun, jul, agu, sep, okt, nov, des, petugas, total, notes, uts1, uts2, uas1, uas2, un, her, mos, tik, osis)
					 		VALUES ('$nis', '$nama', '$jk', '$lembaga', '$jurusan', '$kelas_d', '$ma_jan', '$ma_feb', '$ma_mar', '$ma_apr', '$ma_mei', '$ma_jun', '$ma_jul', '$ma_agu', '$ma_sep', '$ma_okt', '$ma_nov', '$ma_des', '$petugas', '$total', '$notes', '$uts1', '$uts2', '$uas1', '$uas2', '$un', '$her', '$mos', '$tik', '$osis' )");



if ($query)
{
    echo "<script>alert('Data Pembayaran Tersimpan'); window.location = 'history.php' </script>";	
} 
else {
	echo "<script>alert('Data Gagal Tersimpan!'); window.location = 'history.php'  </script>";
    }

 
?>
