<?php
session_start();
include "koneksi.php";

$email = $_POST["email"];
$password = $_POST["password"];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$password = $_POST['password'];
$profile_picture = $_FILES['picture']['name'];
// $namafolder = "../view/upload/" . $profile_picture;

$sql = "SELECT * FROM user WHERE email = '" . $email . "' and password = '" . $password . "'  LIMIT 1";
$hasil = mysqli_query($koneksi, $sql);
$jumlah = mysqli_num_rows($hasil);

if ($jumlah > 0) {
	
	$row = mysqli_fetch_array($hasil);
	$_SESSION["id_user"] = $row["id_user"];
	$_SESSION["email"] = $row["email"];
	$_SESSION["nama"] = $row["nama"];
	$_SESSION["jenis_kelamin"] = $row["jenis_kelamin"];
	$_SESSION["ttl"] = $row["ttl"];
	$_SESSION["alamat"] = $row["alamat"];
    $_SESSION["no_tlp"] = $row["no_tlp"];
	$_SESSION["profile_picture"] = $row["picture"];

	header("location:../view/index.php");
} else {
	header("location:../view/login.php");
}


// if (isset($_POST['login'])) {
// 	$email = strip_tags($_POST['email']); //bertujuan untuk menghilangkan tag HTML
// 	$password = strip_tags($_POST['password']);
// 	$remember = (!empty($_POST['remember_me']) ? $_POST['remember_me'] : '');



// 	if (empty($email) || empty($password)) {
// 		echo '<script>alert("Email Or Password Invalid!!"); location.href="../view/login.php";</script>';
// 	} 
// 	elseif (count((array) $koneksi->query('SELECT email FROM user WHERE email = "'.$email.'"')->fetch_array()) == 0) { //mengambil baris hasil sebagai array asosiatif, array numerik, atau keduanya.
// 		echo '<script>alert("Email Invalid!!"); location.href="../view/login.php";</script>';
// 	}elseif (count((array) $koneksi->query('SELECT password FROM user WHERE password = "'.$password.'"')->fetch_array()) == 0){
// 		echo '<script>alert("Password Invalid!!"); location.href="../view/login.php";</script>';
// 	}
// 	else {
// 		$users = $koneksi->query('SELECT password, nama FROM user')->fetch_assoc(); //mengambil baris hasil sebagai array asosiatif.

// 		if (password_verify($password, $users['password'])) {
// 			$_SESSION['is_login'] = $users['nama'];
// 			session_start();
// 			if ($remember) {
// 				if (!isset($_COOKIE['is_logged'])) {
// 					/**
// 					 * Mengatur cookie selama 1 hari
// 					 * 60 * 60 * 24 = 1 hari
// 					 */
// 					setcookie('_logged', substr(md5($email), 0, 10), time() + (60 * 60 * 24), '/');
// 				}
// 			}
// 			header('location:../view/index.php');
// 		} else {
// 			header('location:../view/index.php');
// 		}
// 	}
// }
?>