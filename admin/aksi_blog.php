<?php
// // koneksi Product
// // koneksi database
// include '../lib/koneksi.php';

// // menangkap data yang di kirim dari form
// $nama_produk          = $_POST['nama_produk'];
// $harga_produk         = $_POST['harga_produk'];
// $keterangan           = $_POST['keterangan'];
// $namaGambar           = $_FILES['gambar']['name'];
// $namaSementara        = $_FILES['gambar']['tmp_name'];

// echo $namaGambar;

// move_uploaded_file($namaSementara, 'assets/images/' . $namaGambar);
// $querySimpan = mysqli_query($koneksi, "INSERT INTO tb_produk (nama_produk,harga_produk,keterangan, gambar) VALUES 
//     ('$nama_produk','$harga_produk','$keterangan','$namaGambar')");

// // jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
// if ($querySimpan) {
//     echo "<script> alert('Registrasi Berhasil'); window.location = 'manage-products.php';</script>";
//     // jika query gagal, akan tampil alert dan halaman akan diarahkan ke form tambah kategori
// } else {
//     echo "<script> alert('Registrasi Gagal'); window.location = 'add-product.php';</script>";
// }

// // Aksi Tambah BLog
// // koneksi database
include '../lib/koneksi.php';

// // menangkap data yang di kirim dari form
$sub_artikel    = $_POST['sub_artikel'];
$judul   = $_POST['judul'];
$link_art     = $_POST['link_art'];
$keterangan     = $_POST['keterangan'];
$namaGambar     = $_FILES['gambar']['name'];
$namaSementara  = $_FILES['gambar']['tmp_name'];

// // menginput data ke database


move_uploaded_file($namaSementara, 'assets/images/blog/' . $namaGambar);
$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_artikel (sub_artikel,judul,link_art,keterangan, gambar) VALUES 
('$sub_artikel','$judul','$link_art','$keterangan','$namaGambar')");


if ($querySimpan) {
    echo "<script> alert('Registrasi Berhasil'); window.location = 'manage-blog.php';</script>";
} else {
    echo "<script> alert('Registrasi Gagal'); window.location = 'add-BLog.php';</script>";
}
