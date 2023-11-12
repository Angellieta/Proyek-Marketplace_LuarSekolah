<?php

//koneksi ke database
include "koneksi.php";

//menangkap posting dari field input form
$nama = $_POST['nama'];
$email = $_POST['email'];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$password = $_POST['password'];
// $profile_picture = $_FILES['picture']['name'];

$namafolder = "../view/upload/"; //folder tempat menyimpan file
$user_check = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'"));
if (!empty($_FILES["picture"]["tmp_name"])) {
    $jenis_gambar = $_FILES['picture']['type']; //memeriksa format gambar

    if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/svg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/png") {
        $lampiran = $namafolder . basename($_FILES['picture']['name']);
        $lampiran2 = basename($_FILES['picture']['name']);
        //mengupload gambar dan update row table database dengan path folder dan nama image
        if ($user_check == 0) {
            //mengupload gambar dan update row table database dengan path folder dan nama image
            if (move_uploaded_file($_FILES['picture']['tmp_name'], $lampiran)) {

                $query_insert = "INSERT INTO user (nama, email, ttl, jenis_kelamin, alamat, no_tlp, password, picture)
                        VALUES ('$nama','$email','$ttl','$jenis_kelamin','$alamat','$no_tlp','$password','$lampiran2')";
                $insert = mysqli_query($koneksi, $query_insert);

                if ($jenis_kelamin == "Laki-Laki") {
                    echo "<fieldset style=' border:0px; width: 700px; border-radius:10px;  background: rgba(0, 159, 183);box-shadow: 5px 8px 4px 5px rgba(0, 159, 183, 0.50); position: fixed;
                        left: 20%;
                        top: 20%;'>";
                    echo "<h2><span style='margin-left: 300px; margin-right:300px; padding-top:10px; padding-bottom:10px; margin: top 30px; '>Data Diri </span> </h2>";
                    echo "<div style='display: flex; flex-direction: row; height: 300px'>";
                    echo "<div style='height:200px'>";
                    echo "<p><span style='padding-left: 50px; padding-right:252px; padding-top:20px; padding-bottom:20px; margin: top 30px; '> <b> Nama Lengkap : </b>", $nama, "</span></p>";
                    echo "<p><span style='padding-left: 50px; padding-right:240px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Email : </b>", $email, "</span></p>";
                    echo "<p><span style='padding-left: 50px; padding-right:179px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Tanggal lahir : </b>", $ttl, "</span></p>";
                    echo "<p><span style='padding-left: 50px; padding-right:327px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Jenis Kelamin : </b>", $jenis_kelamin, "</span></p>";
                    echo "<p><span style='padding-left: 50px; padding-right:265px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>No. Telp : </b>", $no_tlp, "</span></p>";
                    echo "<p><span style='padding-left: 50px; padding-right:257px; padding-top:10px; padding-bottom:30px; margin: top 30px'><b>Alamat : </b>", $alamat, "</span></p>";
                    echo "</div >";
                    echo "<div style='margin-left:-130px; margin-top:10px; width:225px;'>";
                    echo "<img src ='$lampiran' style='width:200px; height:200px' >";
                    echo "<a href='../view/index.php'><button style='border-radius:5px; margin-top: 40px; margin-left: 100px; width:100px; height:30px; border: none; background-color:#FFCF3E; font-weight: bold' >Home</button></a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</fieldset>";
                } else {
                    echo "<fieldset style='border:0px; width: 700px; border-radius:10px; background: #CC3E5C ;box-shadow: 5px 8px 4px 5px rgba(255, 0, 32, 0.60);
                        position: fixed;
                        left: 20%;
                        top: 20%; color: white;'>";
                    echo "<h2><span style='margin-left: 300px; margin-right:300px; padding-top:10px; padding-bottom:10px; margin: top 30px; '>Data Diri </span> </h2>";
                    echo "<div style='display: flex; flex-direction: row; height: 300px '>";
                    echo "<div>";
                    echo "<p><span style='padding-left: 50px; padding-right:252px; padding-top:20px; padding-bottom:20px; margin: top 30px; '> <b> Nama Lengkap : </b>", $nama, "</span></p>";
                    echo "<p><span style='padding-left: 50px; padding-right:240px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Email : </b>", $email, "</span></p>";
                    echo "<p><span style='padding-left: 50px; padding-right:179px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Tanggal lahir : </b>", $ttl, "</span></p>";
                    echo "<p><span style='padding-left: 50px; padding-right:327px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Jenis Kelamin : </b>", $jenis_kelamin, "</span></p>";
                    echo "<p><span style='padding-left: 50px; padding-right:265px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>No. Telp : </b>", $no_tlp, "</span></p>";
                    echo "<p><span style='padding-left: 50px; padding-right:257px; padding-top:10px; padding-bottom:30px; margin: top 30px'><b>Alamat : </b>", $alamat, "</span></p>";
                    echo "</div>";
                    echo "<div style='margin-left:-130px; margin-top:10px; width:200px;'>";
                    echo "<img src ='$lampiran' style='width:200px; height:200px'>";
                    echo "<a href='../view/index.php'><button style='border-radius:5px; margin-top: 40px; margin-left: 100px; width:100px; height:30px; border: none; background-color:#9CCAD9; font-weight: bold' >Home</button></a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</fieldset>";
                }
            } else {
                echo "Gambar gagal dikirim";
            }
        } else {
            echo '<script>alert("Email Anda Sudah Terdaftar"); location.href="../view/registrasi.php";</script>';
        }

    } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
    }
} else {
    echo "Anda belum memilih gambar";
}

?>