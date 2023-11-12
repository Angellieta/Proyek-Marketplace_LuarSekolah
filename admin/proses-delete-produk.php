<?php
include "../php/koneksi.php";

$sql = "DELETE FROM produk WHERE id_produk='" . $_GET["id_produk"] . "'";
if (mysqli_query($koneksi, $sql)) {
    echo '<script>alert("Record deleted successfully")</script>';
    echo '<script>window.location="admin.php"</script>';

} else {
    echo "Error deleting record: " . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>