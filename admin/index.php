<!DOCTYPE html>
<html>

<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>

<body>

	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br />
	<a href="add-product.php">+ TAMBAH MAHASISWA</a>
	<br />
	<br />
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama Produk</th>
			<th>harga Produk</th>
			<th>keterangan</th>
			<th>Gambar</th>

		</tr>
		<?php
		include '../lib/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "select * from tb_produk");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_produk']; ?></td>
				<td><?php echo $d['harga_produk']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
				<td><img src="assets/images//<?php echo $d['gambar']; ?>" alt="" style="width:150px"></td>

				<td>
					<a href="edit.php?id=<?php echo $d['id_produk']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_produk']; ?>">HAPUS</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>