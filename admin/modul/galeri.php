<?php
include '../include/koneksi.php';
switch(@$_GET['act']){
//tampil galeri
	default:
	echo "<h2>Galeri</h2>
	<form method=post action='?module=galeri&act=tambahgaleri'>
	<input type=submit value='Tambah Galeri'>
	</form>
	<table class=\"table table-striped table-dark\">
	<thead>
	<tr>
	<th scope=\"col\">No</th>
	<th scope=\"col\">id galeri</th>
	<th scope=\"col\">Nama Galeri</th>
	<th scope=\"col\">Tgl</th>
	<th scope=\"col\">Galeri</th>
	<th scope=\"col\">Aksi</th>
	</tr>
	</thead>
	<tbody>";
	$tampil=mysqli_query($koneksi,"select * from galeri order by id_galeri");
	$no=1;
	while ($r=mysqli_fetch_array($tampil))
	{
		echo "
		<tr>
		<th scope=\"row\">$no</th>
		<td>$r[id_galeri]</td>
		<td>$r[nm_galeri]</td>
		<td>$r[tgl_galeri]</td>
		<td><img src='galeri/$r[gambar]' width='50'></td>
		<td><a href=?module=galeri&act=editgaleri&id=$r[id_galeri]>Edit</a> |
		<a href=\"aksi.php?module=galeri&act=hapus&id=$r[id_galeri]\"
		onClick=\"return confirm('apakah anda benar akan menghapus
		galeri $r[id_galeri]?')\">Hapus</a></td>
		</tr>
		</tbody>";
		$no++;
	}
	echo "</table>";
	break;
//tambah galeri
	case "tambahgaleri":
	echo "<h2>Tambah galeri</h2>
	<form method=post action='aksi.php?module=galeri&act=input'
	enctype='multipart/form-data'>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Nama Galeri</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name='nm_gal' >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputPassword1\">Keterangan</label>
	<textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\" name='ket'></textarea>
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputPassword1\">File Gambar</label><br>
	<input name='gam' type='file' size='30' />
	</div>
	<button type=\"submit\" class=\"btn btn-primary\" value=Simpan>Simpan</button>
	<button type=\"submit\" class=\"btn btn-primary\" value=Batal onClick=self.history.back()>Batal</button>
	</form>";
	break;
//edit galeri
	case "editgaleri":
	$edit=mysqli_query($koneksi,"select * from galeri where id_galeri='$_GET[id]'");
	$r=mysqli_fetch_array($edit);
	echo "<h2>Edit galeri</h2>
	<form method=post action='aksi.php?module=galeri&act=update'
	enctype='multipart/form-data'>
	<div class=\"form-group\">
	<input type=hidden name=id value='$r[id_galeri]'>
	<label for=\"exampleInputEmail1\">Nama Galeri</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name='nm_gal' value='$r[nm_galeri]'>
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputPassword1\">Keterangan</label>
	<textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\" name='ket'>$r[ket]</textarea>
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputPassword1\">File Gambar</label><br>
	<img src='galeri/$r[gambar]' width='50'><br>
	<input name='gam_baru' type='file' size='30' />
	</div>
	<button type=\"submit\" class=\"btn btn-primary\" value=Update>Update</button>
	<button type=\"submit\" class=\"btn btn-primary\" value=Batal onClick=self.history.back()>Batal</button>
	</form>";
	break;}
	?>
