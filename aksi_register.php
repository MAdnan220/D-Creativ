<?php
// koneksi database
include 'lib/koneksi.php';

// menangkap data yang di kirim dari form
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$level = $_POST['level'];


// menginput data ke database
$querySimpan = mysqli_query($koneksi, "insert into tb_users values('','$nama_depan','$nama_belakang','$username','$password','$email','$no_telp','$level')");


// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
    echo "<script> alert('Registrasi Berhasil'); window.location = 'index.php';</script>";
    // jika query gagal, akan tampil alert dan halaman akan diarahkan ke form tambah kategori
} else {
    echo "<script> alert('Registrasi Gagal'); window.location = 'register.php';</script>";
}
