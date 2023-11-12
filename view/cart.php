<?php
session_start();
include("../php/koneksi.php");

if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
        $item = array_column($_SESSION["cart"], "id_produk");
        if (!in_array($_GET["id_produk"], $item)) {
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'id_produk' => $_GET["id_produk"],
                'nama_produk' => $_GET["nama_produk"],
                'harga' => $_GET["harga"],
                'product_quantity' => $_GET["quantity"],
                'pict_product' => $_GET["pict_product"],
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="cart.php"</script>';
        } else {
            echo '<script>alert("Product is already in  the cart")</script>';
            echo '<script>window.location="produk.php"</script>';
        }
    } else {
        $item_array = array(
            'id_produk' => $_GET["id_produk"],
            'nama_produk' => $_GET["nama_produk"],
            'harga' => $_GET["harga"],
            'product_quantity' => $_GET["quantity"],
            'pict_product' => $_GET["pict_product"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $value) {
            if ($value["id_produk"] == $_GET["id_produk"]) {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been removed")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php include("header.php"); ?>
    <div style="margin-top: 100px;">
        <div style="clear: both"></div>
        <h3 class="title2" style="text-transform: uppercase;">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered" style="font-family: monospace; font-size:16px;">
                <tr>
                    <td width="30%">Gambar</td>
                    <td width="30%">Nama Produk</td>
                    <td width="10%">Jumlah</td>
                    <td width="13%">Harga</td>
                    <td width="10%">Total Price</td>
                    <td width="17%">Remove Item</td>
                </tr>
                <?php
                if (!empty($_SESSION["cart"])) {
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td>
                                <img src="<?php echo $value["pict_product"]; ?>">
                            </td>
                            <td>
                                <?php echo $value["nama_produk"]; ?>
                            </td>
                            <td>
                                <?php echo $value["product_quantity"]; ?>
                            </td>
                            <td>
                                <?php echo $value["harga"]; ?>
                            </td>
                            <td>
                                <?php echo number_format($value["product_quantity"] * $value["harga"], 2); ?>
                            </td>
                            <td><a href="cart.php?action=delete&id_produk=<?php echo $value["id_produk"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>
                        </tr>
                        <?php
                        $total = $total + ($value["product_quantity"] * $value["harga"]);
                    }
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">
                            <?php echo number_format($total, 2); ?>
                        </td>
                        <td></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>