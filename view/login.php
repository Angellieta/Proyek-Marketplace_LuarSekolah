<?php
	include '../php/koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="../img/logo.png" type="image/icon-E&I">
    <script src="../js/login.js"></script>
    <link rel="stylesheet" href="../css/style-form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mooli&family=Young+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Poppins:wght@100;300;400;500;700&family=Yeseva+One&display=swap" rel="stylesheet" />
</head>
<body>
    <div>
        <a href="index.php"><img src="../img-form/logo-noBG.png" alt="logo-evodisiremia" /></a>
	</div>
    <h1 class="welcome">WELCOME</h1>
    <div class="div-form" >
        
        <form action="../php/proses-login.php" name="loginForm" method="post" onsubmit="return validateForm()">
            <table>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="email"  id="email" name="email" placeholder="Enter Your Email" value="" autocomplete="off" required></td> 
                </tr>
                <tr>
                    <td><label for="pass">Password:</label></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" id="password" name="password" placeholder="Enter Your Password" value="" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td class="tx-cb"><input type="checkbox" id="remember_me" name="remember_me"> Remember Me</td>
                </tr>
                <tr>
                    <td colspan="2" class="td-button"><button id="login" type="submit" name="login">LOGIN</button></td>
                </tr>
                <tr>
                    <td colspan="2" ><p>Not a member? <a href="../view/registrasi.php" class="regis-form"> Register Here!</a></p></td>
                </tr>
            </table>
        </form>
        
    </div>
</body>
</html>