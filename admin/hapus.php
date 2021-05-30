<?php
include "koneksi.php";
$id_produk   = $_GET['id'];
$queryHapus = mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id_produk  =' $id_produk  '");
echo $id_produk;
var_dump($queryHapus);
if ($queryHapus) {
    echo "<script> alert('Data Produk Yakin Ingin Dihapus'); window.location = 'manage-products.php';</script>";
} else {
    echo "<script> alert('Data Beli Gagal Dihapus'); window.location = 'manage-products.php';</script>";
}
