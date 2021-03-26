<html>
<head>
	<title>PT Sinergi Bestama Indonesia</title>
</head>
<body>
	<center>
		<h1>PT Sinergi Bestama Indonesia</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($karyawan as $kar){ ?>
	<form action="<?php echo base_url(). 'index.php/Karyawan_C/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIK</td>
				<td>
					<input type="hidden" name="id_karyawan" value="<?php echo $kar->id_karyawan ?>">
					<input type="text" name="nik" value="<?php echo $kar->nik ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $kar->nama ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo $kar->jenis_kelamin ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>