<!DOCTYPE html>
<html>
	<head>
		<title>Tabel Data Jenis Barang</title>
	</head>
	<body>
		<table border="1" style="border-collapse:collapse; width:40%">
			<tr bgcolor="orange">
				<th>Kode Jenis</th>
				<th>Nama Jenis</th>
				<th>Opsi</th>
			</tr>
			<?php
			include 'koneksi.php';
			$stid = oci_parse($koneksi, 'select *from jenis_barang');
			oci_execute($stid);
			while (($d =oci_fetch_array($stid, OCI_BOTH)) !=false) {
			?>
			<tr>
				<td><?php echo $d['KD_JENIS']; ?></td>
				<td><?php echo $d['NAMA_JENIS']; ?></td>
			
				<td align="center">
					Edit | Hapus
				</td>
			</tr>
			<?php
		}
			?>
		</table>
	</body>
</html>