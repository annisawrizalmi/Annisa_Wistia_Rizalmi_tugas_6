<?php

include 'neksi.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Menambah Data Makanan</title>
	<link rel="stylesheet" type="text/css" href="gayaisi.css">
</head>
<body>

	<div id="Divisi">
		<div>
			<h2>Masukkan Daftar Menu</h2>
			<a href="awal.php"><button id="ViewData">View Data</button></a>
		</div><br><br>
		<div>
			<form action="" method="POST" enctype="multipart/form-data">
				<table>
					<tr>
								<td>Nama Makanan</td>
								<td> </td>
								<td><input type="text" name="nama_mkn" autocomplete="off"></td>
							</tr>
							<tr>
								<td>Harga Makanan</td>
								<td> </td>
								<td><input type="text" name="harga" autocomplete="off"></td>
							</tr>
							<tr>
								<td>Gambar Makanan</td>
								<td> </td>
								<td><input type="file" name="gambar_mkn" autocomplete="off"></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><input type="submit" name="kirim" value="Save"></td>
							</tr>
				</table>				
			</form>
		</div>
	</div>

<?php  

#jika tombol ditekan

	if (isset($_POST ['kirim'])) {
		
		#membuat variabel baru untuk diinputkan

		$nama = $_POST['nama_mkn'];
		$harga = $_POST['harga'];

		#nama file yang akan diambil untuk gambar dan ambil dari namanya

		$nama_file = $_FILES['gambar_mkn']['name'];
		
		#link untuk gambarnya
		$source = $_FILES['gambar_mkn']['tmp_name'];

		#tempat gambarnya disimpan
		$folder_gmbr = './foto/';

		#tempat memindahkan file gambar
		move_uploaded_file($source, $folder_gmbr.$nama_file);

		#membuat script untuk menghubungkan data yang dimasukkan kedalam database

		$insert = mysqli_query($koneksi, "INSERT INTO menu_makanan VALUES (NULL,
			'$nama',
			'$harga',
			'$nama_file'
			)");

#jika query insert dimasukkan
	if ($insert) {
			# code...
			echo 'data berhasil dimasukkan';
		} else {
			echo 'gagal upload';
		}
	}

?>



</body>
</html>