<?php

include 'neksi.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Menu Makanan</title>
	<link rel="stylesheet" type="text/css" href="gayaawal.css">
</head>
<body>
	<div id="canvas">
		<div>
			<a href="isi.php"><button id="button1">Insert</button></a>
		</div><br><br>
		<div>
			<table>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Gambar</th>
					<th>Aksi</th>
				</tr>
				<?php 

							#membuat variabel dan memasukkannya kedalam query untuk menampilkan datanya
							$query = mysqli_query ($koneksi, "SELECT * FROM menu_makanan"); 
							#membuat perulangan dan memasukkan variabel query yang dibuat
							while ($row = mysqli_fetch_array($query)) {

							?>

							<!-- 1. Memasukkan php sesuai dengan baris yang sudah dibuat di atas dan nama dari [] sesuaikan dengan yang di database
							2. dan untuk gambar dibuatkan img scr agar gambar yang ada difolder bisa ditampilkan  -->
							<tr>
								<td><?php echo $row ['id_makanan']?></td>
								<td><?php echo $row ['nama_makanan']?></td>
								<td><?php echo $row ['harga_makanan']?></td>
								<td><img src="foto/<?php echo $row ['foto_makanan']?>" width="150px" height="100px"></td>
								<td>
								<!--  -->	
									<a href="ganti.php?id=<?php echo $row ['id_makanan']?>"><button>Edit</button></a> <br><br>
									<a href="clear.php?id=<?php echo $row ['id_makanan']?>"><button>Hapus</button></a>
								</td>
							</tr>
							
							<?php } ?>
			</table>



		</div>
	</div>

</body>
</html>