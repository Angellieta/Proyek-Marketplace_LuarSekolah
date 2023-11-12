<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="icon" href="../img/logo.png" type="image/icon-E&I">
    <link rel="stylesheet" href="../css/profile.css" type="text/css">
    <link rel='stylesheet' href='https://unpkg.com/css.gg@2.0.0/icons/css/profile.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mooli&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <?php include "header.php" ?>
    <div class="cont-slide" id="home">
        <div class="slide-pict">
            <img src="../img-form/bg-profile.png" alt="Banner Product" style="width: 100%;">
        </div>
    </div>
    <div class="photo">
        <?php 
        if(isset($_SESSION['jenis_kelamin'])) {
            if($_SESSION['jenis_kelamin'] === 'Perempuan' ) {
               echo '<svg xmlns="http://www.w3.org/2000/svg" width="153" height="153" viewBox="0 0 153 153" fill="none">
            <circle cx="76.5" cy="76.5" r="72.5" fill="white" stroke="#FFCEE5" stroke-width="8" /> </svg>';
            }else{
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="153" height="153" viewBox="0 0 153 153" fill="none">
            <circle cx="76.5" cy="76.5" r="72.5" fill="white" stroke="#acdfe9" stroke-width="8" /> </svg>';
            }
        }
        ?>
        <img src="upload/<?php if (isset($_SESSION['profile_picture'])) {
            echo $_SESSION['profile_picture'];
        } else {
            echo "";
        }
        ?>" alt="Photo Profile"
            style="margin-top: 9px;height: 135px;border-radius: 100%;width: 135px;display: inline-block;margin-left: -144px;">
    </div>
    <h1>Profile Details</h1>
    <div class="div-reg">
        <form method="post" enctype="multipart/form-data" action="../php/proses-profile.php">

            <label for="nama">Nama Lengkap</label>
            <div class="form-pro">
                <input type="text" id="nama" name="nama" value="<?php if (isset($_SESSION['nama'])) {
                    echo $_SESSION['nama'];
                } else {
                    echo "";
                }
                ?>">
            </div>

            <label for="email">Email</label>
            <div class="form-pro">
                <input type="email" id="email" name="email" value="<?php if (isset($_SESSION['email'])) {
                    echo $_SESSION['email'];
                } else {
                    echo "";
                }
                ?>">
            </div>

            <label for="ttl">Tanggal Lahir</label>
            <div class="form-pro">
                <input type="date" id="ttl" name="ttl" value="<?php if (isset($_SESSION['ttl'])) {
                    echo $_SESSION['ttl'];
                } else {
                    echo "";
                }
                ?>">
            </div>

            <label for="alamat">Alamat Lengkap</label>
            <div class="form-pro">
                <input type="text" id="alamat" name="alamat" value="<?php if (isset($_SESSION['alamat'])) {
                    echo $_SESSION['alamat'];
                } else {
                    echo "";
                }
                ?>">
            </div>

            <label for="nohp">Nomor Telepon</label>
            <div class="form-pro">
                <input type="text" name="no_tlp" id="no_tlp" value="<?php if (isset($_SESSION['no_tlp'])) {
                    echo $_SESSION['no_tlp'];
                } else {
                    echo "";
                }
                ?>">
            </div>

            <label for="password">Password</label>
            <div class="form-pro">
                <input type="password" name="password" id="password">
            </div>

            <label for="cpassword">Konfirmarsi Password</label>
            <div class="form-pro">
                <input type="password" name="cpassword" id="cpassword">
            </div>

            <label for="picture">Unggah Foto</label>
            <div>
                <input type="file" name="picture" id="picture" accept="image/*">
            </div>

            <div class="btn">
                <button type="submit" id="btn-submit" name="submit">Update Profile</button>
            </div>
        </form>
    </div>
    <?php include "footer.php" ?>
</body>
<script>feather.replace();</script>

</html>