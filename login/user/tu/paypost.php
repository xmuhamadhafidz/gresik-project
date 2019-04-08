<?php

include "../connection.php";

///////////////////////////									  HEADER 						    //////////////////////////////////

$nis           	= $_POST['nis'];
$nama           = $_POST['nama'];
$jk        		= $_POST['jk'];
$telp			= $_POST['telp'];
$masuk			= $_POST['masuk'];
$status			= $_POST['status'];
$lembaga		= $_POST['lembaga'];
$jurusan		= $_POST['jurusan'];
$kelas_d		= $_POST['kelas_d'];


///////////////////////////									  mts 						    //////////////////////////////////
$mts_jan		= $_POST['mts_jan'];
$mts_feb		= $_POST['mts_feb'];
$mts_mar		= $_POST['mts_mar'];
$mts_apr		= $_POST['mts_apr'];
$mts_mei		= $_POST['mts_mei'];
$mts_jun		= $_POST['mts_jun'];
$mts_jul		= $_POST['mts_jul'];
$mts_agu		= $_POST['mts_agu'];
$mts_sep		= $_POST['mts_sep'];
$mts_okt		= $_POST['mts_okt'];
$mts_nov		= $_POST['mts_nov'];
$mts_des		= $_POST['mts_des'];

//////////////////////////										MA 							///////////////////////////////////
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


//////////////////////////						 			OTHER 							///////////////////////////////////

$uts1		= $_POST['uts1'];
$uts2		= $_POST['uts2'];
$uas1		= $_POST['uas1'];
$uas2		= $_POST['uas2'];
$un			= $_POST['un'];
$tik		= $_POST['tik'];
$osis		= $_POST['osis'];
$mos		= $_POST['mos'];
$her		= $_POST['her'];
$da_u		= $_POST['da_u'];
$dw_u		= $_POST['dw_u'];
$seragam	= $_POST['seragam'];


$da_jan		= $_POST['da_jan'];
$da_feb		= $_POST['da_feb'];
$da_mar		= $_POST['da_mar'];
$da_apr		= $_POST['da_apr'];
$da_mei		= $_POST['da_mei'];
$da_jun		= $_POST['da_jun'];
$da_jul		= $_POST['da_jul'];
$da_agu		= $_POST['da_agu'];
$da_sep		= $_POST['da_sep'];
$da_okt		= $_POST['da_okt'];
$da_nov		= $_POST['da_nov'];
$da_des		= $_POST['da_des'];


//////////////////////////						 			OTHER 							///////////////////////////////////




$dw_jan		= $_POST['dw_jan'];
$dw_feb		= $_POST['dw_feb'];
$dw_mar		= $_POST['dw_mar'];
$dw_apr		= $_POST['dw_apr'];
$dw_mei		= $_POST['dw_mei'];
$dw_jun		= $_POST['dw_jun'];
$dw_jul		= $_POST['dw_jul'];
$dw_agu		= $_POST['dw_agu'];
$dw_sep		= $_POST['dw_sep'];
$dw_okt		= $_POST['dw_okt'];
$dw_nov		= $_POST['dw_nov'];
$dw_des		= $_POST['dw_des'];




$p_qutub_jan		= $_POST['p_qutub_jan'];
$p_qutub_feb		= $_POST['p_qutub_feb'];
$p_qutub_mar		= $_POST['p_qutub_mar'];
$p_qutub_apr		= $_POST['p_qutub_apr'];
$p_qutub_mei		= $_POST['p_qutub_mei'];
$p_qutub_jun		= $_POST['p_qutub_jun'];
$p_qutub_jul		= $_POST['p_qutub_jul'];
$p_qutub_agu		= $_POST['p_qutub_agu'];
$p_qutub_sep		= $_POST['p_qutub_sep'];
$p_qutub_okt		= $_POST['p_qutub_okt'];
$p_qutub_nov		= $_POST['p_qutub_nov'];
$p_qutub_des		= $_POST['p_qutub_des'];

$p_quran_jan		= $_POST['p_quran_jan'];
$p_quran_feb		= $_POST['p_quran_feb'];
$p_quran_mar		= $_POST['p_quran_mar'];
$p_quran_apr		= $_POST['p_quran_apr'];
$p_quran_mei		= $_POST['p_quran_mei'];
$p_quran_jun		= $_POST['p_quran_jun'];
$p_quran_jul		= $_POST['p_quran_jul'];
$p_quran_agu		= $_POST['p_quran_agu'];
$p_quran_sep		= $_POST['p_quran_sep'];
$p_quran_okt		= $_POST['p_quran_okt'];
$p_quran_nov		= $_POST['p_quran_nov'];
$p_quran_des		= $_POST['p_quran_des'];




$sql = "INSERT INTO ma (nis, nama, jk, telp, masuk, status, lembaga, jurusan, kelas_d, jan, feb, 
												 mar, apr, mei, jun, jul, agu, sep, okt, nov, des)

					 		VALUES ('$nis', '$nama', '$jk', '$telp', '$masuk', '$status', '$lembaga', '$jurusan', '$kelas_d', '$ma_jan', 
					 				'$ma_feb', '$ma_mar', '$ma_apr', '$ma_mei', '$ma_jun', '$ma_jul', '$ma_agu', '$ma_sep', '$ma_okt', '$ma_nov', '$ma_des')";

/**$sql .= "INSERT INTO mts (nis, nama, jk, telp, masuk, status, lembaga, jurusan, kelas_d, jan, feb, 
												 mar, apr, mei, jun, jul, agu, sep, okt, nov, des)
					 		VALUES ('$nis', '$nama', '$jk', '$telp', '$masuk', '$status', '$lembaga', '$jurusan', '$kelas_d', '$mts_jan', 
					 				'$mts_feb', '$mts_mar', '$mts_apr', '$mts_mei', '$mts_jun', '$mts_jul', '$mts_agu', '$mts_sep', '$mts_okt', '$mts_nov', '$mts_des')";


$sql .= "INSERT INTO da (nis, nama, jk, telp, masuk, status, lembaga, jurusan, kelas_d, jan, feb, 
												 mar, apr, mei, jun, jul, agu, sep, okt, nov, des)
					 		VALUES ('$nis',, '$nama', '$jk', '$telp', '$masuk', '$status', '$lembaga', '$jurusan', '$kelas_d', '$da_jan', 
					 				'$da_feb', '$da_mar', '$da_apr', '$da_mei', '$da_jun', '$da_jul', '$da_agu', '$da_sep', '$da_okt', '$da_nov', '$da_des')";
 

$sql .= "INSERT INTO dw (nis, nama, jk, telp, masuk, status, lembaga, jurusan, kelas_d, jan, feb, 
												 mar, apr, mei, jun, jul, agu, sep, okt, nov, des)
					 		VALUES ('$nis','$nama', '$jk', '$telp', '$masuk', '$status', '$lembaga', '$jurusan', '$kelas_d', '$da_jan', 
					 				'$da_feb', '$da_mar', '$da_apr', '$da_mei', '$da_jun', '$da_jul', '$da_agu', '$da_sep', '$da_okt', '$da_nov', '$da_des')";


$sql .= "INSERT INTO pqutub (nis, nama, jk, telp, masuk, status, lembaga, jurusan, kelas_d, jan, feb, 
												 mar, apr, mei, jun, jul, agu, sep, okt, nov, des)
					 		VALUES ('$nis', '$nama', '$jk', '$telp', '$masuk', '$status', '$lembaga', '$jurusan', '$kelas_d', '$p_qutub_jan', 
					 				'$p_qutub_feb', '$p_qutub_mar', '$p_qutub_apr', '$p_qutub_mei', '$p_qutub_jun', '$p_qutub_jul', '$p_qutub_agu', '$p_qutub_sep', '$p_qutub_okt', '$p_qutub_nov', '$p_qutub_des')";


$sql .= "INSERT INTO pquran (nis, nama, jk, telp, masuk, status, lembaga, jurusan, kelas_d, jan, feb, 
												 mar, apr, mei, jun, jul, agu, sep, kt, nov, des)
					 		VALUES ('$nis', '$nama', '$jk', '$telp', '$masuk', '$status', '$lembaga', '$jurusan', '$kelas_d', '$p_quran_jan', 
					 				'$p_quran_feb', '$p_quran_mar', '$p_quran_apr', '$p_quran_mei', '$p_quran_jun', '$p_quran_jul', '$p_quran_agu', '$p_quran_sep', '$p_quran_okt', '$p_quran_nov', '$p_quran_des')";

$sql .= "INSERT INTO other (nis, nama, jk, telp, masuk, status, lembaga, jurusan, kelas_d, uts1, uts2, uas1, uas2, un, da_u, dw_u, mos, osis, tik, her, seragam)
					 		VALUES ('$nis','$nama', '$jk', '$telp', '$masuk', '$status', '$lembaga', '$jurusan', '$kelas_d', '$uts1', 
					 				'$uts2', '$uas1', '$uas2', '$un', '$da_u', '$dw_u', '$mos', '$osis', '$tik', '$her', '$seragam')";

*


if (mysqli_multi_query($db, $sql)){
    echo "<script>alert('Y'); window.location = 'history.php'</script>";	
} else {
	echo "<script>alert('N'); window.location = 'history.php'</script>";
    }

error_reporting (E_ALL ^ E_NOTICE);

*/

$go = mysqli_query($db, $sql);

if ($go) {
	echo ("sukses");
}
?>
