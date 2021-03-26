<html>
<head>
	<title>PT Sinergi Bestama Indonesia</title>
</head>
<body>
	<center><h1>PT Sinergi Bestama Indonesia</h1></center>
	<center><?php echo anchor('Karyawan_C/add_form','Tambah Data'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/Login_C/logout/'); ?>">Logout</a></center>
	<center>Halo, <?php echo $this->session->userdata("nama"); ?></center>
    <table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>NIK</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($karyawan as $kar){ 
		?>
		<tr>
			<td><?php echo $no++; ?></td>
            <td><?php echo $kar->nik; ?></td>
			<td><?php echo $kar->nama; ?></td>
			<td><?php echo $kar->jenis_kelamin; ?></td>
			<td>
			    <?php echo anchor('Karyawan_C/edit/'.$kar->id_karyawan,'Edit'); ?>
                <?php echo anchor('Karyawan_C/delete/'.$kar->id_karyawan,'Delete'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>