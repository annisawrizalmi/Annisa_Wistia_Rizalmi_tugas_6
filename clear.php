<?php 

#masukkan koneksi
include 'neksi.php';

#membuat variabel dan query dan masukkan id dari makanannya
$delete = mysqli_query ($koneksi, "DELETE FROM menu_makanan WHERE id_makanan = '".$_GET['id']."' ");

if ($delete) {
 	# code...
 	header ('location:awal.php');
 } else {
 	echo 'Gagal Menghapus Data';
 }



 ?>