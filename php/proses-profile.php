<!-- <?php
    include('../view/registrasi.php');
    
	if (isset($_POST["submit"])) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$lahir = $_POST['lahir'];
		$jenis = $_POST['jenis'];
		$nohp = $_POST['nohp'];
		$alamat = $_POST['alamat'];
		$pass = $_POST['pass'];
		$image_name = $_FILES['profile_picture']['name'];
		$image_type = $_FILES['profile_picture']['type'];
		$image_size = $_FILES['profile_picture']['size'];
		$image_tmp_name = $_FILES['profile_picture']['tmp_name'];
 		
		move_uploaded_file($image_tmp_name, "upload/$image_name");
		

		if ($jenis=="Laki-laki") {
			echo "<fieldset style=' border:0px; width: 750px; border-radius:10px;  background: rgba(0, 159, 183);box-shadow: 5px 8px 4px 5px rgba(0, 159, 183, 0.50); position: fixed;
			left: 20%;
			top: 20%;'>";
			echo "<h2><span style='margin-left: 300px; margin-right:300px; padding-top:10px; padding-bottom:10px; margin: top 30px; '>Data Diri </span> </h2>";
			echo "<div style='display: flex; flex-direction: row;'>";
			echo "<div>";
			echo "<p><span style='padding-left: 50px; padding-right:252px; padding-top:20px; padding-bottom:20px; margin: top 30px; '> <b> Nama Lengkap : </b>", $nama, "</span></p>";
			echo "<p><span style='padding-left: 50px; padding-right:240px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Email : </b>", $email,"</span></p>";
			echo "<p><span style='padding-left: 50px; padding-right:179px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Tanggal lahir : </b>",$lahir,"</span></p>";
			echo "<p><span style='padding-left: 50px; padding-right:327px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Jenis Kelamin : </b>",$jenis,"</span></p>";
			echo "<p><span style='padding-left: 50px; padding-right:265px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>No. Telp : </b>",$nohp,"</span></p>";
			echo "<p><span style='padding-left: 50px; padding-right:257px; padding-top:10px; padding-bottom:30px; margin: top 30px'><b>Alamat : </b>",$alamat,"</span></p>";
			echo "</div>";
			echo "<div style=''>";
			echo "<img src ='upload/$image_name' style='margin-left:-120px; margin-top:15px; width:225px'>";
			echo "<a href='index.html'><button style='border-radius:5px; margin-top: 250px; margin-left: 35px' >Login</button></a>";
			echo "</div>";
			echo "</div>";
			echo "</fieldset>";
	
			
	
		}else{
			echo "<fieldset style='border:0px; width: 750px; border-radius:10px; background: #CC3E5C ;box-shadow: 5px 8px 4px 5px rgba(255, 0, 32, 0.60);
			position: fixed;
			left: 20%;
			top: 20%; color: white;'>";
			echo "<h2><span style='margin-left: 300px; margin-right:300px; padding-top:10px; padding-bottom:10px; margin: top 30px; '>Data Diri </span> </h2>";
			echo "<div style='display: flex; flex-direction: row;'>";
			echo "<div>";
			echo "<p><span style='padding-left: 50px; padding-right:252px; padding-top:20px; padding-bottom:20px; margin: top 30px; '> <b> Nama Lengkap : </b>", $nama, "</span></p>";
			echo "<p><span style='padding-left: 50px; padding-right:240px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Email : </b>", $email,"</span></p>";
			echo "<p><span style='padding-left: 50px; padding-right:179px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Tanggal lahir : </b>",$lahir,"</span></p>";
			echo "<p><span style='padding-left: 50px; padding-right:327px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>Jenis Kelamin : </b>",$jenis,"</span></p>";
			echo "<p><span style='padding-left: 50px; padding-right:265px; padding-top:10px; padding-bottom:20px; margin: top 30px'><b>No. Telp : </b>",$nohp,"</span></p>";
			echo "<p><span style='padding-left: 50px; padding-right:257px; padding-top:10px; padding-bottom:30px; margin: top 30px'><b>Alamat : </b>",$alamat,"</span></p>";
			echo "</div>";
			echo "<div style=''>";
			echo "<img src ='upload/$image_name' style='margin-left:-120px; margin-top:15px; width:225px; height:225px'>";
			echo "<a href='index.html'><button style='border-radius:5px; margin-top: 250px; margin-left: 35px' >Login</button></a>";
			echo "</div>";
			echo "</div>";
			echo "</fieldset>";
		}
	
	}
	
?> -->
<?php 
    include "koneksi.php"; 
	
	//     $nama = $_POST['nama']; 
	//     $email = $_POST['email']; 
	//     $ttl = $_POST['ttl']; 
	//     $jenis_kelamin = $_POST['jenis_kelamin']; 
	//     $alamat = $_POST['alamat']; 
	//     $no_tlp = $_POST['no_tlp']; 
	//     $password = $_POST['password']; 
	//  $profile_picture = $_POST['picture']['name']; 
	//  $namafolder = "../view/upload/".$profile_picture; 
	
	//     $sql = "SELECT * FROM user WHERE email = '".$email."' LIMIT 1"; 
	//  $hasil = mysqli_query($koneksi, $sql); 
	//  $jumlah = mysqli_num_rows($hasil); 
	
     
    if(isset($_POST['submit'])){ 
        $user_id = $_GET['id_user'];
        $update_nama = $_POST['nama']; 
        $update_nama = filter_var($update_nama, FILTER_SANITIZE_STRING); 
        $update_email = $_POST['email']; 
        $update_email = filter_var($update_email, FILTER_SANITIZE_STRING); 
        $update_ttl = $_POST['ttl']; 
        $update_alamat = $_POST['alamat']; 
        $update_no_tlp = $_POST['no_tlp']; 
        $update_no_tlp = filter_var($update_no_tlp, FILTER_SANITIZE_STRING); 
        $prev_password = $_POST['password']; 
        $prev_picture = $_FILES['picture']['name']; 
 
        if(!empty($update_nama)){ 
            $update_nama = $koneksi->prepare("UPDATE user SET nama = ? WHERE id_user = ?"); 
            $update_nama->execute([$update_nama, $user_id]); 
            echo 'Nama Anda Telah Berhasil Diperbaharui'; 
        } 
 
        if(!empty($update_email)){ 
            $select_email = "SELECT email FROM user WHERE email = ? "; 
            $slt_email = mysqli_query($koneksi, $select_email); 
            if($slt_email > 0){ 
                echo 'Email Sudah Terdaftar!'; 
            }else{ 
                $update_email = $koneksi->prepare("UPDATE user SET email = ? WHERE id_user = ?"); 
                $update_email->execute([$update_email, $user_id]); 
                echo 'Email Anda Telah Berhasil Diperbaharui'; 
            } 
        } 
         
        if(!empty($update_ttl)){ 
            $update_ttl = $koneksi->prepare("UPDATE user SET ttl = ? WHERE id_user = ?"); 
            $update_ttl->execute([$update_ttl, $user_id]); 
            echo 'Tanggal Lahir Anda Telah Berhasil Diperbaharui'; 
        } 
 
        if(!empty($update_alamat)){ 
            $update_alamat = $koneksi->prepare("UPDATE user SET alamat = ? WHERE id_user = ?"); 
            $update_alamat->execute([$update_alamat, $user_id]); 
            echo 'Alamat Anda Telah Berhasil Diperbaharui'; 
        } 
 
        if(!empty($update_no_tlp)){ 
            $update_no_tlp = $koneksi->prepare("UPDATE user SET no_tlp = ? WHERE id_user = ?"); 
            $update_no_tlp->execute([$update_no_tlp, $user_id]); 
            echo 'Nomor Telepon Anda Telah Berhasil Diperbaharui'; 
        } 
 
        $image = $_FILES['picture']['name']; 
        $image = filter_var($image, FILTER_SANITIZE_STRING); 
        $ext = pathinfo($image, PATHINFO_EXTENSION); 
        $rename = $ext; 
        $image_size = $_FILES['picture']['size']; 
        $image_tmp_name = $_FILES['picture']['tmp_name']; 
        $image_folder = 'upload/'.$rename; 
 
        if(!empty($image)){ 
            if($image_size > 2000000){ 
                $message = 'Ukuran Gambar Terlalu Besar!'; 
            }else{ 
                $update_image = $koneksi->prepare("UPDATE user SET picture = ? WHERE id_user = ?"); 
                $update_image->execute([$rename, $user_id]); 
                move_uploaded_file($image_tmp_name, $image_folder); 
                if($prev_picture != '' AND $prev_picture != $rename){ 
                    unlink('upload/'.$prev_picture); 
                } 
                echo 'Gambar Anda Telah Berhasil Diperbaharui'; 
            } 
        } 
 
        $empty_pass = ''; 
        $old_pass = $_POST['old_pass']; 
        $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING); 
        $new_pass = $_POST['new_pass']; 
        $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING); 
 
        if($old_pass != $empty_pass){ 
            if($old_pass != $prev_pass){ 
                echo 'Password Lama Tidak Sama';
			}else{ 
                if($new_pass != $empty_pass){ 
                    $update_pass = $koneksi->prepare("UPDATE user SET password = ? WHERE id_user = ?"); 
                    $update_pass->execute([$update_pass, $user_id]); 
                    echo 'Password Anda Telah Berhasil Diperbaharui'; 
                }else{ 
                    echo  'Masukkan Password Baru Anda!'; 
                } 
            } 
        } 
 
    } 
  
?>