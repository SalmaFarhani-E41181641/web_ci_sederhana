<!DOCTYPE html>
<html>
<head>
	<title>Data Sampah</title>
</head>
<body>
	<center>
		<h1>Data Sampah</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). "crud/tambah_aksi"; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Sampah</td>
				<td><input type="text" id="nama_sampah" name="nama_sampah"></td>
			</tr>
			<tr>
				<td>Banyaknya</td>
				<td><input type="text" id="jumlah_sampah" name="jumlah_sampah"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td><input type="text" id= "lokasi" name="lokasi"></td>
			</tr>
			<tr>
				<td>Handphone</td>
				<td><input type="text" id="hp" name="hp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>