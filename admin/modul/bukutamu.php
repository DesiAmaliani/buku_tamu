<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script type="text/javascript" src="../admin/modul/tinymce/tiny_mce.js"></script>
	<script type="text/javascript">
		tinymce.init({
			mode:"textareas",
			theme:"advanced",
		});
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	
</head>
<body>
	<div id="container">
		<h2>Buku Tamu</h2>
		<hr>
		<p>Silahkan isi buku tamu di bawah ini untuk meninggalkan pesan Anda!</p>

		<form action="aksi.php?module=bukutamu&act=inputtamu" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">ID</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="id_bktamu" required/>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Status</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="status_bktamu" required/>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Nama</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="nama_bktamu" required/>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email_bktamu" required/>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Alamat</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="alamat_bktamu" required/>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Tanggal</label>
				<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="tgl_bktamu" required/>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Komentar</label>
				<textarea  name="komentar"></textarea>
			</div>
			<button type="submit" class="btn btn-primary"name="go" value="Kirim" />Kirim</button>
			<button class="btn btn-primary"name="go" type="reset" name="del" value="Hapus" / />Reset</button>
		</form>
	</div>
</body>
</html>

