<?php
include("../php/koneksi.php");
$id_user = $_POST["id_user"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$ttl = $_POST["ttl"];
$alamat = $_POST["alamat"];
$no_tlp = $_POST["no_tlp"];

$sql = "UPDATE user SET nama='$nama', email='$email', ttl = '$ttl', alamat = '$alamat', no_tlp = '$no_tlp' WHERE id_user=$id_user";
$result = mysqli_query($koneksi, $sql);
if (!$result) {
    echo "Gagal Update";
    exit;
}
header("location:adminUser.php");
?>