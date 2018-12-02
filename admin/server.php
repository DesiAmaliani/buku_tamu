<?php
session_start();
//error_reporting(0);

//pabiila user yang mengakses tidak sah
if (empty ($_SESSION['namauser']) and empty ($_SESSION['passuser'])) {
	echo "<center>Untuk megakses halaman ini, anda harus login terlebih dahulu <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center";
}

//apabila user yang mengakses sah
else {
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>.:: Halaman Utama Administrator ::.</title>
		<link href="../include/style_admin.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>
	<body>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td colspan="2" align="left" valign="top" background="../images/header_xxx.gif">



											<nav class="nav nav-pills nav-justified">
												<a class="nav-item nav-link active" href="server.php?module=home">Beranda</a>
												<a class="nav-item nav-link active"  href="server.php?module=gantipwd&id=<? echo "$_SESSION[namauser]>Ganti Password</a>
												<a class="nav-item nav-link active" href="logout.php">Logout</a>

											</nav><br>
											</td>
											</tr>
											<tr>

				<td width="200" valign="top" id="menu">
				<?php include "menu.php"; ?>
			</td>
			<td align="left" valign="top" bgcolor="#FEFDF7" class="text"
			id="content">
			<?php include "konten.php"; ?></td>
		</tr>
		<tr>
			<td height="40" colspan="2" align="center" valign="middle" background="../images/background_1.jpg"><span class="kecil">Copyright <b>Polindra</b> &copy; 2001. All Right Reserved<br>
				<span class="style_text">Design By <a href="http://www.polindra.ac.id" target="_blank">Training Center TI Polindra</a></span></span></td>
			</tr>
			
		</table>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
	</html>
	<?php
}
?>