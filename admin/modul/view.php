<?php


switch(@$_GET['act']){
	//tampil user
	default:
	echo "<h2>Lihat Buku Tamu</h2>
	<hr>
	<br>
	<table class=\"table table-striped table-dark\">
	<thead>
	<tr>
	<th scope=\"col\">No</th>
	<th scope=\"col\">id buku tamu</th>
	<th scope=\"col\">Status</th>
	<th scope=\"col\">Nama Buku Tamu</th>
	<th scope=\"col\">Email</th>
	<th scope=\"col\">Alamat Buku Tamu</th>
	<th scope=\"col\">Tanggal Buku Tamu</th>
	<th scope=\"col\">Komentar</th>
	</tr>
	</thead>
	<tbody>";
	$tampil=mysqli_query($koneksi, "select *from buku_tamu order by id_bktamu");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)) {
		echo "
		<tr>
		<th scope=\"row\">$no</th>
		<td>$r[id_bktamu]</td>
		<td>$r[status_bktamu]</td>
		<td>$r[nm_bktamu]</td>
		<td>$r[email_bktamu]</td>
		<td>$r[alamat_bktamu]</td>
		<td>$r[tgl_bktamu]</td>
		<td>$r[komentar]</td>
		</tr>
		</tbody>";
		$no++;
	}
	echo "</table>";

	break;
}