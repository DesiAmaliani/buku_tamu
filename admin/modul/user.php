<?php


switch($_GET['act']){
	//tampil user
	default:
	echo "<h2>User</h2>
	<hr>
	<br>
	
	<form method=post action='?module=user&act=tambahuser'>
	<input type=submit value='Tambah User'>
	</form>

	<table class=\"table table-striped table-dark\">
	<thead>
	<tr>
	<th scope=\"col\">No</th>
	<th scope=\"col\">Username</th>
	<th scope=\"col\">Password</th>
	<th scope=\"col\">Aksi</th>
	</tr>
	</thead>
	<tbody>";
	$tampil=mysqli_query($koneksi, "select * from admin order by id_user");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)) {
		echo "
		<tr>
		<th scope=\"row\">$no</th>
		<td>$r[id_user]</td>
		<td>$r[password]</td>
		<td><a href=?module=user&act=edituser&id=$r[id_user]>Edit</a> |
		<a href=\"aksi.php?module=user&act=hapus&id=$r[id_user]\"onClick=\"return confirm('apakah anda benar akan menghapus user $r[id_user]?')\">Hapus</a></td>
		</tr>
		</tbody>";
		$no++;
	}
	echo "</table>";

	break;
	//tambah user
	case "tambahuser": 
	echo "<h2>Tambah User</h2>
	<form method=post action='aksi.php?module=user&act=input'>
	<div class=\"form-group\">
	<label for=\"exampleInputEmail1\">Username</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name= id_user >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputPassword1\">Password</label>
	<input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\" name=password>
	</div>
	<button type=\"submit\" class=\"btn btn-primary\" value=Simpan>Simpan</button>
	<button type=\"submit\" class=\"btn btn-primary\" value=Batal onClick=self.history.back()>Batal</button>
	</form>";
	break;

	//edit user
	case "edituser":
	$edit=mysqli_query($koneksi,"select * from admin where id_user='$_GET[id]'");
	$r=mysqli_fetch_array($edit);
	echo "<h2>Edit User</h2>
	<form method=post action='aksi.php?module=user&act=update'>
	<div class=\"form-group\">
	<input type=hidden name=id value='$r[id_user]'>
	<label for=\"exampleInputEmail1\">Username</label>
	<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=id_user value='$r[id_user]' >
	</div>
	<div class=\"form-group\">
	<label for=\"exampleInputPassword1\">Password</label>
	<input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\" name=password value='$r[password]'>
	</div>
	<button type=\"submit\" class=\"btn btn-primary\" value=Update>Update</button>
	<button type=\"submit\" class=\"btn btn-primary\" value=Batal onClick=self.history.back()>Batal</button>
	</form>";
	break;}


	?> 