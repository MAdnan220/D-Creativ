<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="register.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
			<th>username</th>
			<th>passwrod</th>
            <th>Email</th>
			<th>no_telp</th>
            <th>level</th>
           
		</tr>
		<?php 
		include 'lib/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_users");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_depan']; ?></td>
				<td><?php echo $d['nama_belakang']; ?></td>
				<td><?php echo $d['username']; ?></td>
                <td><?php echo $d['password']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['no_telp']; ?></td>
                <td><?php echo $d['level']; ?></td>
				
				<td>
					<a href="edit.php?id=<?php echo $d['id_users']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_users']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>