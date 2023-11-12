<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evodis & Iremia</title>
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
    <?php include "header.php" ?>

    <div class="cont-slide" id="home">
        <div class="slide-pict fade">
            <img src="../img/slider-photo1.png" alt="Banner Product" style="width: 100%;">
        </div>
        <div class="slide-pict fade">
            <img src="../img/slider-photo2.png" alt="Banner Product" style="width: 100%;">
        </div>
        <div class="slide-pict fade">
            <a href="#product"><img src="../img/slider-photo3.png" alt="Banner Product" style="width: 100%;"></a>
        </div>
    </div>
    <aside>
        <div class="social-media">
            <ul>
                <li>
                    <a href="https://www.instagram.com/alietaa_/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/angel-lieta-bb5485164/" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <section class="product" id="product">
        <p class="head">OUR PRODUCTS</p>
        <br />
        <button class="pre-btn"><img src="../img/arrow.png" alt="" /></button>
        <button class="nxt-btn"><img src="../img/arrow.png" alt="" /></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/1.png" alt="hijau" class="product-thumb" />
                    <button class="card-btn" onclick="window.location.href='produk.php'">Add to Wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-title">Melaleuca Alternifolia</h2>
                    <p class="description">Ekstrak tea tree</p>
                </div>
                <span class="price">Rp 70.000,-</span>
                <span class="actual-price">Rp 95.000,-</span>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="../img/2.png" alt="pink" class="product-thumb" />
                    <button class="card-btn" onclick="window.location.href='produk.php'">Add to Wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-title">Pelargonium Graveolens</h2>
                    <p class="description">Ekstrak Geranium</p>
                </div>
                <span class="price">Rp 100.000,-</span>
                <span class="actual-price">Rp 125.000,-</span>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/3.png" alt="orange" class="product-thumb" />
                    <button class="card-btn" onclick="window.location.href='produk.php'">Add to Wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-title">Citrus Sinensis</h2>
                    <p class="description">Ekstrak Citrus</p>
                </div>
                <span class="price">Rp 60.000,-</span>
                <span class="actual-price">Rp 85.000,-</span>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/4.png" alt="abu" class="product-thumb" />
                    <button class="card-btn" onclick="window.location.href='produk.php'">Add to Wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-title">Copaifera</h2>
                    <p class="description">Ekstrak Copaiba</p>
                </div>
                <span class="price">Rp 90.000,-</span>
                <span class="actual-price">Rp 115.000,-</span>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/5.png" alt="tosca" class="product-thumb" />
                    <button class="card-btn" onclick="window.location.href='produk.php'">Add to Wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-title">Mentha Spicata</h2>
                    <p class="description">Ekstrak Spearmint</p>
                </div>
                <span class="price">Rp 96.000,-</span>
                <span class="actual-price">Rp 121.000,-</span>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/6.png" alt="coklat" class="product-thumb" />
                    <button class="card-btn" onclick="window.location.href='produk.php'">Add to Wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-title">Purify</h2>
                    <p class="description">Cleansing Blend</p>
                </div>
                <span class="price">Rp 78.000,-</span>
                <span class="actual-price">Rp 103.000,-</span>
            </div>
        </div>
    </section>
    <p class="review-head" id="review">OUR CUSTOMER'S</p>
    <div class="cont-review">
        <div class="box1">
            <span class="box-star">
                <p class="star"></p>
                <p class="star"></p>
                <p class="star"></p>
                <p class="star"></p>
                <p class="star"></p>
            </span>
            <span class="txt-rvw">
                <p>"Packaging bagus & rapih, wanginya enak banget. Terima kasih"</p>
            </span>
            <span class="icon-rvw">
                <img src="../img/icon-user1.png" alt="IMG User">
                <p>Dhani Ridwan</p>
            </span>
        </div>
        <div class="box2">
            <span class="box-star">
                <p class="star"></p>
                <p class="star"></p>
                <p class="star"></p>
                <p class="star"></p>
                <p class="star"></p>
            </span>
            <span class="txt-rvw">
                <p>"Sangat efektif untuk mengharumkan ruangan dan wanginya tahan lama"</p>
            </span>
            <span class="icon-rvw">
                <img src="../img/icon-user2.png" alt="IMG User">
                <p>William Junior</p>
            </span>
        </div>
        <div class="box3">
            <span class="box-star">
                <p class="star"></p>
                <p class="star"></p>
                <p class="star"></p>
                <p class="star"></p>
                <p class="star"></p>
            </span>
            <span class="txt-rvw">
                <p>"Daebak!! Sangat recommend, dijamin bakal tidur nyenyak"</p>
            </span>
            <span class="icon1-rvw">
                <img src="../img/icon-user.jpg" alt="IMG User">
                <p>Jung Jamal</p>
            </span>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script>
        feather.replace();
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("slide-pict");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 5000);
        }
        const productContainers = [
            ...document.querySelectorAll('.product-container')
        ];
        const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
        const preBtn = [...document.querySelectorAll('.pre-btn')];

        productContainers.forEach((item, i) => {
            let containerDimensions = item.getBoundingClientRect();
            let containerWidth = containerDimensions.width;

            nxtBtn[i].addEventListener('click', () => {
                item.scrollLeft += containerWidth;
            });

            preBtn[i].addEventListener('click', () => {
                item.scrollLeft -= containerWidth;
            });
        });
    </script>
</body>

</html>