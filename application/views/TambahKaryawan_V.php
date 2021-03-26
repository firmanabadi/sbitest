<!DOCTYPE html>
<html lang="en">
<head>
	<title>Test SBI Tambah Karyawan</title>
</head>
<body>
	<center>
		<h1>PT Sinergi Bestama Indonesia</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/Karyawan_C/add'; ?>" method="post">
		<table style="margin:20px auto;">
            <tr>
				<td>NIK</td>
				<td><input type="nik" name="nik"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>