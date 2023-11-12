<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelola Data User</title>
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
            <button class="btn-img" onclick="window.location.href='adminUser.php'"><img src="../img-form/arrow-left.svg"
                    alt="arrow-left" class="img-arrow"> Kembali</button>
        </div>
        <span>
            Edit Kelola Data User
        </span>
    </header>
    <div class="modal" id="upd-form">
        <div class="form-upd">
            <?php
            include("../php/koneksi.php");
            $id_user = $_GET['id_user'];
            $sql = "SELECT * FROM user WHERE id_user=$id_user";
            $result = mysqli_query($koneksi, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <form action="editData_user.php" method="post">
                <input type="hidden" id="id_user" name="id_user" value="<?php echo $row['id_user'] ?>">

                <label class="form-label">Nama Lengkap:</label>
                <div class=" div-input">
                    <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $row['nama'] ?>">
                </div>
                <label class="form-label">Email:</label>
                <div class=" div-input">
                    <input type="email" id="email" name="email" class="form-control"
                        value="<?php echo $row['email'] ?>">
                </div>
                <label class="form-label">Tanggal Lahir:</label>
                <div class=" div-input">

                    <input type="date" id="ttl" name="ttl" class="form-control" value="<?php echo $row['ttl'] ?>">
                </div>
                <label class="form-label">Alamat:</label>
                <div class=" div-input">
                    <input type="text" id="alamat" name="alamat"  class="form-control"
                        value="<?php echo $row['alamat'] ?>">
                </div>
                <label class="form-label">Nomor Telepon:</label>
                <div class=" div-input">
                    <input type="text" id="no_tlp" name="no_tlp" class="form-control"
                        value="<?php echo $row['no_tlp'] ?>">
                </div>
                <div>
                    <button type="submit" class="btn-upd" name="submit">Update Data Produk</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>