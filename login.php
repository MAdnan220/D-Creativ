<?php 

// menghubungkan php dengan koneksi database
include 'lib/koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tb_users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="Admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
	
		$_SESSION['level'] = "Admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/main.php");

	// cek jika user login sebagai User
	}else if($data['level']==""){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "";
		// alihkan ke halaman dashboard user
		header("location:index.php");


	}else{

		// alihkan ke halaman login kembali
		echo "<script> alert('Data yang anda masukan salah'); window.location = 'index.php';</script>";
	}	
}else{
	echo "<script> alert('Data yang anda masukan salah'); window.location = 'index.php';</script>";
}
