<?php
session_start();
include("../php/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Produk Evodis & Iremia</title>
    <link rel="icon" href="../img/logo.png" type="image/icon-E&I">
    <link rel="stylesheet" href="../css/style-product.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include "header.php" ?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <div class="container bootdey">
        <div class="col-md-3">
            <section class="panel">
                <div class="panel-body">
                    <form action="">
                        <input type="text" placeholder="Keyword Search" id="myInput" class="form-control" />
                    </form>

                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">Kategori Produk</header>
                <div class="panel-body">
                    <ul class="nav prod-cat">
                        <li><a data-id="all" class="active">Semua Produk</a></li>
                        <li><a data-id="oil">Essential Oil</a></li>
                        <li><a data-id="candle">Candle</a></li>
                        <li><a data-id="spray">Linen Spray</a></li>
                        <li><a data-id="refill">Air Freshener Refill</a></li>
                        <li><a data-id="roll">Aromatherapy Roll On</a></li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="col-md-9">
            <div class="row product-list">
                <?php
                $query = "SELECT * FROM produk ORDER BY id_produk ASC";
                $result = mysqli_query($koneksi, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="col-md-4">
                            <section class="panel">
                                <div class="product-card">
                                    <form method="post"  action="cart.php?action=add&id_produk=<?php echo $row["id_produk"];?>">
                                        <div class="product-image">
                                            <input type="hidden" name="id_produk" value="<?php echo $row['id_produk']; ?>" />
                                            <img src="<?php echo $row['pict_product']; ?> " alt="produk"
                                                class="product-thumb" />
                                            <button type="submit" class="card-btn" name="add">Add to Wishlist</button>
                                            <input type="hidden" name="quantity" class="form-control" value="1">
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title">
                                                <?php echo $row['nama_produk']; ?>
                                            </h2>
                                            <p class="description">
                                                <?php echo $row['desc_produk']; ?>
                                            </p>
                                            <span class="price">Rp
                                                <?php echo $row['harga']; ?>,-
                                            </span>
                                        </div>
                                    </form>

                                </div>
                            </section>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

</div>
    <?php include "footer.php" ?>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>