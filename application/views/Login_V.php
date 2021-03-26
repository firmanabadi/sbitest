<html>
<head>
	<title>PT Sinergi Bestama Indonesia</title>
</head>
<body>
	<h1>PT Sinergi Bestama Indonesia</h1>
    <h3>Login</h3>
	<form action="<?php echo base_url('index.php/Login_C/aksi_login/'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>