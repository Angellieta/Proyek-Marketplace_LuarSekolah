<?php
    session_start();
    include "../php/koneksi.php"
    
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Dashboard Evodis</title>

		<!-- CSS -->
		<link rel="stylesheet" href="admin.css" />
		<link rel="icon" href="../img/logo.png" type="image/icon-E&I">
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;800&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<div class="container">
			<aside>
				<div class="logo-nama">
					<div class="logo">
						<img
							src="../img/logo.png"
							alt="logo-evodis"
							width="100px"
							height="100px"
                            onclick="window.location.href='../view/index.php'"
						/>
					</div>
					<div class="nama">Admin Evodis</div>
				</div>
				<div class="section-data">
					<div>
						<a class="data-product" href="admin.php">
							<img
								width="23"
								height="23"
								src="https://img.icons8.com/ios-filled/50/683706/database.png"
								alt="database"
							/>
							<div class="nama-data">Data Product</div>
						</a>
					</div>
					<a class="data-user" href="adminUser.php">
						<img
							width="28"
							height="28"
							src="https://img.icons8.com/ios-glyphs/30/683706/name.png"
							alt="name"
						/>
						<div class="nama-data">Data User</div>
					</a>
					<a class="data-keranjang" href="adminKeranjang.php">
						<img
							width="25"
							height="25"
							src="https://img.icons8.com/external-anggara-glyph-anggara-putra/32/683706/external-cart-ecommerce-anggara-glyph-anggara-putra-2.png"
							alt="external-cart-ecommerce-anggara-glyph-anggara-putra-2"
						/>
						<div class="nama-data">Data Keranjang</div>
					</a>
				</div>
				<a class="logout" href="#"><div>LOGOUT</div></a>
			</aside>
			<main>
				<header>
					<div class="judul">Dashboard <span>> Data Keranjang</span></div>
					<a class="tambah-data" href="#"><div>+ Tambah</div></a>
				</header>
				<div class="brownn">
				<?php
					$query = "SELECT * FROM produk INNER JOIN user LIMIT 1,10";
					$result = mysqli_query($koneksi, $query);
					$no = 1;
					?>
					<div class="whitee">
						<table>
							<tr>
								<th class="border-rightt">No</th>
								<th class="border-rightt">Id User</th>
								<th class="border-rightt">Id Produk</th>
								<th class="border-rightt">Nama Produk</th>
								<th class="border-rightt">Harga</th>
								<th class="border-rightt">Jumlah</th>
								<th class="border-action">Action</th>
							</tr>
							<tbody>
								<?php
								if(mysqli_num_rows($result)>0){
									$i = 1;
									while($row = mysqli_fetch_assoc($result)){
								?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $row["id_user"]; ?></td>
									<td><?php echo $row["id_produk"];?></td>
									<td><?php echo $row["nama_produk"];?></td>
									<td><?php echo $row["harga"];?></td>
									<td><?php echo $row["jumlah"];?></td>
								</tr>
								<?php
									$no++;
								?>
								<?php
								
								}
							}
							mysqli_close($koneksi);
								?>
							</tbody>
						</table>
					</div>
				</div>
			</main>
		</div>
	</body>
</html>
