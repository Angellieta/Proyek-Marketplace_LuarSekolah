<?php
include "../php/koneksi.php";

$sql = "DELETE FROM user WHERE id_user='" . $_GET["id_user"] . "'";
if (mysqli_query($koneksi, $sql)) {
    echo '<script>alert("Record deleted successfully")</script>';
    echo '<script>window.location="adminUser.php"</script>';

} else {
    echo "Error deleting record: " . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>