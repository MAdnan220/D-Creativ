<?php
include "koneksi.php";
$id_artikel   = $_GET['id_artikel'];
$queryHapus = mysqli_query($koneksi, "DELETE FROM tb_artikel WHERE id_artikel  =' $id_artikel  '");
echo $id_artikel;
var_dump($queryHapus);
if ($queryHapus) {
    echo "<script> alert('Data Produk Yakin Ingin Dihapus'); window.location = 'manage-BLog.php';</script>";
} else {
    echo "<script> alert('Data Beli Gagal Dihapus'); window.location = 'manage-BLog.php';</script>";
}
