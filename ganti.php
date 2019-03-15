<?php 

#memasukkan file  koneksi untuk menghubungkannya kedalam database
	include 'neksi.php';

#membuat variabel untuk menampilkan data yang ada didatabase
$edit = mysqli_query ($koneksi, "SELECT * FROM menu_makanan WHERE id_makanan = '".$_GET['id']."'");

#menampilkan data yang ada diarray dan masukkan edit kedalamnya agar menampilkan databasenya
$patdata = mysqli_fetch_array($edit);

#untuk menyimpan data yang dipanggil
$nm_mkn = $patdata['nama_makanan'];
$hr_mkn = $patdata['harga_makanan'];
$file_mkn = $patdata['foto_makanan'];


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mengganti Data Makanan</title>
	<link rel="stylesheet" type="text/css" href="gayaganti.css">
</head>
<body>
	<div>
		<h2>Ganti Data Menu Makanan</h2>
		<a href="awal.php"><button id="DataView">View Data</button></a>
		<div>
			<form action="" method="POST" enctype="multipart/form-data">
				<table>
							<tr>
								<td>Nama Makanan</td>
								<td> </td>
								<td><input type="text" name="nama_mkn" value="<?php echo $nm_mkn ?>" /></td>
							</tr>
							<tr>
								<td>Harga Makanan</td>
								<td> </td>
								<td><input type="text" name="harga" value="<?php echo $hr_mkn ?>" /></td>
							</tr>
							<tr>
								<td>Gambar Makanan</td>
								<td> </td>
								<td>
									<input type="hidden" name="img" value=" <?php echo $file_mkn ?>">
									<input type="file" name="gambar_mkn" /></td>
							</tr>

							<!--membuat tampilan gambar akan terlihat saat diedit-->
							<tr>
								<td> </td>
								<td> </td>
								<td><img src="foto/<?php echo $file_mkn ?>" width="150px" height ="100px" /></td>
							</tr>


							<tr>
								<td></td>
								<td></td>
								<td><input type="submit" name="kirim" value="Update" /></td>
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


		if ($nama_file != '') {
			# code...
			#1. membuat file memindahkan filenya
			move_uploaded_file($source, $folder_gmbr.$nama_file);

			#2. membuat variabel baru dan masukkan query updatenya
			#3. masukkan query update dan masukkan nama sesuai dengan database dan masukkan variable yang sudah dibuat dan mendapatkannya dengan id
			$update_dt = mysqli_query ($koneksi, "UPDATE menu_makanan SET 

				nama_makanan = '".$nama."',
				harga_makanan = '".$harga."', 
				foto_makanan = '".$nama_file."'
				WHERE id_makanan = '".$_GET['id']."'
			 ");

			#jika berhasil di update
			if ($update_dt) {
				# code...
				echo ' Data Berhasil Diupdate';
			} else {
				echo ' Data Tidak Berhasil Diupdate';
			}


		} 

		#selanjutnya masukkan variabel update dan querynya untuk cara lainnya isinya terdapat dengan nama dan harga yang mau digantikan dan dimasukkan juga idnya 
		else {
			$update_dt = mysqli_query ($koneksi, "UPDATE menu_makanan SET 

				nama_makanan = '".$nama."',
				harga_makanan = '".$harga."'
				WHERE id_makanan = '".$_GET['id']."'
			 ");

			if ($update_dt) {
				# code...
				echo ' Data Berhasil Diupdate';
			} else {
				echo ' Data Tidak Berhasil Diupdate';
			}
		}
}
?>


</body>
</html>