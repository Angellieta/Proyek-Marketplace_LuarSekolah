
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelola Data Produk</title>
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
            Edit Kelola Data Produk
        </span>
    </header>
    <div class="modal" id="upd-form">
        <div class="form-upd">
            <?php
            include("../php/koneksi.php");
            $id_produk = $_GET['id_produk'];
            $sql = "SELECT * FROM produk WHERE id_produk=$id_produk";
            $result = mysqli_query($koneksi, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <form action="editData_produk.php" method="post">
                <input type="hidden" id="id_produk" name="id_produk" value="<?php echo $row['id_produk'] ?>">
                <label class="form-label">Kode Kategori Produk:</label>
                <div class=" div-input">
                    <select name="kode_kategori" class="form-control" id="kode_kategori">
                        <option value="<?php echo $row['kode_kategori'] ?>"></option>
                        <option value="1">1. Essential Oil</option>
                        <option value="2">2. Candle</option>
                        <option value="3">3. Linen Spray</option>
                        <option value="4">4. Air Freshener Refill</option>
                        <option value="5">5. Aromatheraphy Roll On</option>
                    </select>
                </div>
                <label class="form-label">Nama Produk:</label>
                <div class=" div-input">
                    <input type="text" id="nama_produk" name="nama_produk" class="form-control"
                        value="<?php echo $row['nama_produk'] ?>">
                </div>
                <label class="form-label">Deskripsi Produk:</label>
                <div class=" div-input">
                    <input type="text" id="desc_produk" name="desc_produk" class="form-control"
                        value="<?php echo $row['desc_produk'] ?>">
                </div>
                <label class="form-label">Harga:</label>
                <div class=" div-input">
                    <input type="text" id="harga" name="harga" class="form-control" value="<?php echo $row['harga'] ?>">
                </div>
                <label class="form-label">Stok:</label>
                <div class=" div-input">
                    <input type="number" id="stok" name="stok" min="0" class="form-control"
                        value="<?php echo $row['stok'] ?>">
                </div>
                <label class="form-label">Gambar Produk:</label>
                <div class=" div-input">
                    <input type="file" id="pict_product" name="pict_product">
                </div>
                <div>
                    <button type="submit" class="btn-upd" name="submit">Update Data Produk</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>