<?php
	include '../php/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Registrasi</title>
		<link rel="icon" href="../img/logo.png" type="image/icon-E&I">
		<link rel="stylesheet" href="../css/registrasi.css" />
		<script src="../js/registrasi.js"></script>
		<link rel="icon" href="../img/logo.png" type="image/icon-E&I">
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Poppins:wght@100;300;400;500;700&family=Yeseva+One&display=swap" rel="stylesheet" />
	</head>

	<body>
		<div>
			<a href="index.php"><img src="../img-form/logo-noBG.png" alt="logo-evodisiremia" /></a>
		</div>
		<div class="content">
			<table align="center">
				<tr>
					<td>
						<div class="intro">
							<h2 class="welcome">Welcome!</h2>
							<h2 class="slogan">Nourish Your Senses, <br />Naturally</h2>
						</div>
					</td>
					<td class="pad">
						<div class="container">
							<form action="../php/proses-regis.php" name="myForm" enctype="multipart/form-data" onsubmit="return validateForm()" method="post">
								<div class="registrasi">
									<legend>Registration</legend>
									<br />
									<div class="label-inputan">
									<label for="nama" class="input-label">Full Name :</label>
									<input type="text" name="nama" id="nama" placeholder="Enter Your Name" required/>
								</div>
								<div class="label-inputan">
									<label for="email" class="input-label">Email :</label>
									<input type="text"name="email" id="email" placeholder="example123@gmail.com" />
								</div>
								
								<div class="label-inputan">
									<label for="lahir" class="input-label">Tanggal Lahir :</label>
									<input type="date" name="ttl" id="ttl" placeholder="none"/>
								</div>

								<label for="jenis" class="input-label">Jenis Kelamin :</label>
								<div class="btnradio">
									<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" required />
									<label for="jenis" class="gender-label">Laki-Laki</label>

									<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" required />
									<label for="jenis" class="gender-label">Perempuan</label>
								</div>
								<div class="label-inputan">
									<label for="alamat" class="input-label">Alamat :</label>
									<input type="textarea" name="alamat" id="alamat" placeholder="Enter Your Address"/>
								</div>
								<div class="label-inputan">
									<label for="nohp" class="input-label">No.Hp :</label>
									<input type="text" name="no_tlp" id="no_tlp" placeholder="08XXXXXXXXXX"/>
								</div>
								<div class="label-inputan">
									<label for="pass" class="input-label">Password :</label>
									<input type="password" name="password" id="password"  placeholder="Enter Your Password"/>
								</div>

								<label for="profile_picture" class="input-label">Unggah Foto Profil : </label>
								<div class="file" >
									<input class="upload" type="file" name="picture" id="picture" accept="image/*"/>
								</div>
							</div>
							<button type="submit" name="submit" id="submit" value="submit">Submit</button>
							<br />
						</form>
					</div>
				</td>
			</tr>
		</table>
	</div>

	</body>

</html>