<?php
include("../php/koneksi.php");
$id_produk = $_POST["id_produk"];
$kode_kategori = $_POST["kode_kategori"];
$nama_produk = $_POST["nama_produk"];
$desc_produk = $_POST["desc_produk"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];
$pict_product = basename($_FILES['pict_product']['name']);

$sql = "UPDATE produk SET kode_kategori='$kode_kategori', nama_produk='$nama_produk', desc_produk = '$desc_produk', harga = '$harga', stok = '$stok', pict_product = '$pict_product' WHERE id_produk=$id_produk";
$result = mysqli_query($koneksi, $sql);
if (!$result) {
    echo "Gagal Update";
    exit;
}
header("location:admin.php");
?>