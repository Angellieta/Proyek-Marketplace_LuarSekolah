<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Evodis & Iremia
    </title>
    <link rel="icon" href="../img/logo.png" type="image/icon-E&I">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
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
    <div class="nav-top">
        <div>
            <a href="index.php"><img src="../img/logo-noBG.png" alt="Logo E&I"></a>
        </div>
        <div class="nav-top-right">
            <ul>
                <li class="li-nav"><a href="index.php">HOME</a></li>
                <li class="li-nav"><a href="produk.php">PRODUCT</a></li>
                <li class="li-nav"><a href="#review">REVIEW</a></li>
                <?php if (isset($_SESSION["email"])) {
                    if ($_SESSION["nama"] === 'Admin') {
                        echo '<li class="li-nav"><a href="../admin/admin.php">KELOLA DATA</a></li>';
                    } else {
                        echo "";
                    }
                }
                ?>
                <li class="li-nav"><i data-feather="shopping-bag" id="cart-product" class="icon-shopping-bag"
                        onclick="window.location.href='cart.php'"></i></li>
                <li class="dropdown">
                    <a href="profile.php" class="dropbtn">
                        <i class="gg-profile"></i>
                        <h4>

                            <?php if (isset($_SESSION['nama'])) {
                                echo $_SESSION['nama'];
                            } else {
                                echo "";
                            }
                            ?>
                        </h4>
                    </a>
                    <div class="dropdown-content">
                        <?php
                        if (isset($_SESSION["email"])) {
                            echo '<a href="profile.php">My Profile</a>';
                            echo '<a href="../php/logout.php" style="color: red;">Logout</a>';

                        } else {
                            echo '<a href="login.php">Login</a>';
                            echo '<a href="registrasi.php">Register</a>';
                        }
                        ?>
                    </div>
                </li>
            </ul>

        </div>

    </div>
    <script>
        feather.replace();

        }
    </script>
</body>

</html>