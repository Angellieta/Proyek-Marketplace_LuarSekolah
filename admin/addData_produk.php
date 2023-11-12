<?php
include "../php/koneksi.php";
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$kode_kategori = $_POST['kode_kategori'];
$desc_produk = $_POST['desc_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$namafolder = "../img/";
;

if (isset($_POST['submit'])) {
    if (!empty($_FILES["pict_product"]["tmp_name"])) {
        $jenis_gambar = $_FILES['pict_product']['type']; //memeriksa format gambar
        if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/svg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/png") {
            $lampiran = $namafolder . basename($_FILES['pict_product']['name']);
            $lampiran2 = basename($_FILES['pict_product']['name']);
            //mengupload gambar dan update row table database dengan path folder dan nama image
            //mengupload gambar dan update row table database dengan path folder dan nama image
            if (move_uploaded_file($_FILES['pict_product']['tmp_name'], $lampiran)) {
                $query_insert = "INSERT INTO produk (kode_kategori, nama_produk, desc_produk, harga, stok, pict_product)
                        VALUES ('$kode_kategori','$nama_produk','$desc_produk','$harga','$stok', '$lampiran')";
                $insert = mysqli_query($koneksi, $query_insert);
                echo '<script>alert("Data Produk Sudah Ditambahkan"); location.href="admin.php";</script>';
            } else {
                echo "Gambar gagal dikirim";
            }

        } else {
            echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
        }
    } else {
        echo "Anda belum memilih gambar";
    }
} else {
    echo "Gagal";
}


?>