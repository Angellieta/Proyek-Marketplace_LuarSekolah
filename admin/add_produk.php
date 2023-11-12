<?php   
include "../php/koneksi.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Produk</title>
    <link rel="icon" href="../img/logo.png" type="image/icon-E&I">
    <link rel="stylesheet" href="edit.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,300;0,500;1,700&family=Roboto+Condensed:wght@100;300;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div>
            <button class="btn-img" onclick="window.location.href='admin.php'"><img src="../img-form/arrow-left.svg"
                    alt="arrow-left" class="img-arrow"> Kembali</button>
        </div>
        <span>
            Tambah Data Produk
        </span>
    </header>
    <div class="modal" id="upd-form">
        <div class="form-upd">
            <form action="addData_produk.php" method="post">
                <input type="hidden" id="id_produk" name="id_produk" value="<?php echo $row['id_produk'] ?>">
                <label class="form-label">Kode Kategori Produk:</label>
                <div class=" div-input">
                    <select name="kode_kategori" class="form-control" id="kode_kategori">
                        <?php
                        $query = "SELECT * FROM kategori_produk";
                        $hasil = mysqli_query($koneksi, $query);
                        while($kategori = mysqli_fetch_assoc($hasil)) {
                            echo '<option value="'.$kategori["kode_kategori"].'">' . $kategori["nama_kategori"] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <label class="form-label">Nama Produk:</label>
                <div class=" div-input">
                    <input type="text" id="nama_produk" name="nama_produk" class="form-control">
                </div>
                <label class="form-label">Deskripsi Produk:</label>
                <div class=" div-input">
                    <input type="text" id="desc_produk" name="desc_produk" class="form-control">
                </div>
                <label class="form-label">Harga:</label>
                <div class=" div-input">
                    <input type="text" id="harga" name="harga" class="form-control">
                </div>
                <label class="form-label">Stok:</label>
                <div class=" div-input">
                    <input type="number" id="stok" name="stok" min="0" class="form-control">
                </div>
                <label class="form-label">Gambar Produk:</label>
                <div class=" div-input">
                    <input type="file" id="pict_product" name="pict_product" accept="image/*">
                </div>
                <div>
                    <button type="submit" class="btn-upd" name="submit">SAVE</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>