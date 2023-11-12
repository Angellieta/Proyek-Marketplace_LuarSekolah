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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;800&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="container">
        <aside>
            <div class="logo-nama">
                <div class="logo">
                    <img src="../img/logo.png" alt="logo-evodis" onclick="window.location.href='../view/index.php'"
                        width="100px" height="100px" />
                </div>
                <div class="nama">Admin Evodis</div>
            </div>
            <div class="section-data">
                <div>
                    <a class="data-product" href="admin.php">
                        <img width="23" height="23" src="https://img.icons8.com/ios-filled/50/683706/database.png"
                            alt="database" />
                        <div class="nama-data">Data Product</div>
                    </a>
                </div>
                <a class="data-user" href="adminUser.php">
                    <img width="28" height="28" src="https://img.icons8.com/ios-glyphs/30/683706/name.png" alt="name" />
                    <div class="nama-data">Data User</div>
                </a>
                <a class="data-keranjang" href="adminKeranjang.php">
                    <img width="25" height="25"
                        src="https://img.icons8.com/external-anggara-glyph-anggara-putra/32/683706/external-cart-ecommerce-anggara-glyph-anggara-putra-2.png"
                        alt="external-cart-ecommerce-anggara-glyph-anggara-putra-2" />
                    <div class="nama-data">Data Keranjang</div>
                </a>
            </div>
            <div class="logout">
                <div>LOGOUT</div>
            </div>
        </aside>
        <main>
            <header>
                <div class="judul">Dashboard <span>> Data Produk</span></div>
                <a class="tambah-data" href="add_produk.php">
                    <div>+ Tambah</div>
                </a>
            </header>
            <div class="brownn">
                <div class="whitee">
                    <table>
                        <tr>
                            <th class="border-rightt">No</th>
                            <th class="border-rightt">Id Produk</th>
                            <th class="border-rightt">Kode Kategori</th>
                            <th class="border-rightt">Nama produk</th>
                            <th class="border-rightt">Harga</th>
                            <th class="border-rightt">Stok</th>
                            <th class="border-action">Action</th>
                        </tr>
                        <tbody>
                            <?php
                            if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                                $page_no = $_GET['page_no'];
                            } else {
                                $page_no = 1;
                            }

                            $total_records_per_page = 10;
                            $offset = ($page_no - 1) * $total_records_per_page;
                            $previous_page = $page_no - 1;
                            $next_page = $page_no + 1;
                            // $adjacents = "2";  
                            
                            $result_count = mysqli_query($koneksi, "SELECT COUNT(*) As total_records FROM produk");
                            $total_records = mysqli_fetch_array($result_count);
                            $total_records = $total_records['total_records'];
                            $total_no_of_pages = ceil($total_records / $total_records_per_page);
                            $second_last = $total_no_of_pages - 1; // total page minus 1 
                            $no = 1;
                            $result = mysqli_query($koneksi, "SELECT * FROM produk LIMIT $offset, $total_records_per_page");
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $no; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['id_produk']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["kode_kategori"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["nama_produk"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["harga"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["stok"]; ?>
                                    </td>
                                    <td class="actionn">
                                        <div>
                                            <a href="edit_produk.php?id_produk=<?php echo $row['id_produk'] ?>" class="btn btn-success" role="button"><img
                                                    width="23" height="23" onclick="toggleFieldset()"
                                                    src="https://img.icons8.com/puffy-filled/32/005499/experimental-create-new-puffy-filled.png"
                                                    alt="experimental-create-new-puffy-filled" />
                                            </a>
                                        </div>
                                        <div><a href="proses-delete-produk.php?id_produk=<?php echo $row["id_produk"]; ?>"><img width="23" height="23"
                                                    src="https://img.icons8.com/puffy-filled/32/000000/experimental-trash-puffy-filled.png"
                                                    alt="experimental-trash-puffy-filled" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                                ?>
                                <?php
                            }
                            mysqli_close($koneksi);
                            ?>
                        </tbody>
                    </table>
                    <div class="center">
                        <div class="tbl-pag">
                            <a <?php if ($page_no > 1) {
                                echo "href='?page_no=$previous_page'";
                            } ?>>Previous</a>
                            <?php
                            if ($total_no_of_pages <= 10) {
                                for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
                                    if ($counter == $page_no) {
                                        echo "<a class='active'>$counter</a>";
                                    } else {
                                        echo "<a href='?page_no=$counter'>$counter</a>";
                                    }
                                }
                            } elseif ($total_no_of_pages > 10) {

                                if ($page_no <= 4) {
                                    for ($counter = 1; $counter < 8; $counter++) {
                                        if ($counter == $page_no) {
                                            echo "<a class='active'>$counter</a>";
                                        } else {
                                            echo "<a href='?page_no=$counter'>$counter</a>";
                                        }
                                    }
                                    echo "<a>...</a>";
                                    echo "<a href='?page_no=$second_last'>$second_last</a>";
                                    echo "<a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a>";
                                } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
                                    echo "<a href='?page_no=1'>1</a>";
                                    echo "<a href='?page_no=2'>2</a>";
                                    echo "<a>...</a>";
                                    for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
                                        if ($counter == $page_no) {
                                            echo "<a class='active'>$counter</a>";
                                        } else {
                                            echo "<a href='?page_no=$counter'>$counter</a>";
                                        }
                                    }
                                    echo "<a>...</a>";
                                    echo "<a href='?page_no=$second_last'>$second_last</a>";
                                    echo "<a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a>";
                                } else {
                                    echo "<a href='?page_no=1'>1</a>";
                                    echo "<a href='?page_no=2'>2</a>";
                                    echo "<a>...</a>";

                                    for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                        if ($counter == $page_no) {
                                            echo "<a class='active'>$counter</a>";
                                        } else {
                                            echo "<a href='?page_no=$counter'>$counter</a>";
                                        }
                                    }
                                }
                            }
                            ?>

                            <?php if ($page_no >= $total_no_of_pages) ?>
                            <a <?php
                            if ($page_no < $total_no_of_pages) {
                                echo "href='?page_no=$next_page'";
                            } ?>>Next</a>
                            <?php if ($page_no < $total_no_of_pages) {
                                echo "<a href='?page_no=$total_no_of_pages'>Last</a>";
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>