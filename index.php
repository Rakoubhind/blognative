<?php require 'db.php'; ?>
<?php
$pdostat = $bdd->prepare('Select * FROM article   ');
$executeISOk = $pdostat->execute();
$s = $pdostat->fetchAll();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>lifeleck BLOG || HOME</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/liner_icon.css">
    <link rel="stylesheet" href="css/search.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        h5 {
            font-family: 'Brandon Grotesque', Helvetica, Arial, Lucida, sans-serif;
            color: #000 !important;
            letter-spacing: 5px;
            font-size: 14px;
            border-bottom: 1px solid #e6e6e6;
            margin-top: 50px;
        }

        .section1.grow {
            transition: all .2s ease-in-out;
        }

        .section1:hover {
            transform: scale(0.9);
            transition: box-shadow .3s;
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
        }
    </style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="logof.jpg" alt="logo" style="height:120px;"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php" style="color:#C00417;">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="category.php" style="color:#C00417;">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="article1.php">Articles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php" style="color:#C00417;">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php" style="color:#C00417;">Admin</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="header_social_icon d-none d-lg-block">
                            <ul>
                                <li>
                                    <div id="wrap">
                                        <form action="#" autocomplete="on">
                                            <input id="search" name="search" type="text" placeholder="Search here"><span class="ti-search"></span>
                                        </form>
                                    </div>
                                </li>
                                <li><a href="#" class="d-none d-lg-block"><i class="ti-facebook"></i></a></li>
                                <li><a href="#" class="d-none d-lg-block"> <i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#" class="d-none d-lg-block"><i class="ti-instagram"></i></a></li>
                                <li><a href="#" class="d-none d-lg-block"><i class="ti-skype"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    <section>
        <h5 style="text-align: center;color:#000;"><b>THE LATEST</b> </h5>
        <div class="row mb-4">
            <?php foreach ($s as $article) : ?>
                <div class="card section1 col-lg-3" style="height:550px;margin:50px;">
                    <img class="card-img-top" src="uploads\article\<?= $article['image_article'] ?>" alt="Card image" style="height: 420px;">
                    <div class="card-body">
                        <h4 class="card-title"> <?= $article['title'] ?></h4>
                        <p class="card-text"> <?= substr($article['contenu'], 0, 30) ?>....</p>
                        <a href="readm.php?numar=<?= $article["id_article"]  ?>" class="btn " style="background-color:#C00417;color:white; ">Read More...</a>

                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </section>
    <!-- banner post end-->

    <!-- subscribe form start-->
    <?php
    // $pdostat = $bdd->prepare('Select * FROM news ');
    // $executeISOk = $pdostat->execute();
    // $s = $pdostat->fetchAll();
    // $req = $bdd->prepare("INSERT INTO news SET  name_news = ?,email_news = ? ");
    // $req->execute([$_POST["nom_news"],$_POST["email_news"]]);
    // header("location:index.php");
    // exit();
    ?>

    <div class="subscribe_form padding_top margin_top" style="margin-top:-50px;">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="subscribe_form_iner">
                        <form>
                            <div class="form-row align-items-center justify-content-center">
                                <div class="col-md-12 col-lg-3">
                                    <h3>Receive
                                        Our News</h3>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <input type="text" class="form-control" placeholder="Your name" name="nom_news">
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <input type="text" class="form-control" placeholder="Your email" name="email_news">
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <a href="#" class="btn_1">Register</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe form end-->

    <!-- feature_post start-->
    <section class="all_post section_padding">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_post post_1 feature_post">
                    <div class="single_post_img">
                        <img src="img/post/post_12.png" alt="">
                    </div>
                    <div class="single_post_text text-center">
                        <a href="category.php">
                            <h5> Fashion / Life style</h5>
                        </a>
                        <a href="single-blog.php">
                            <h2>All said replenish years void kind say void </h2>
                        </a>
                        <p>Posted on April 15, 2019</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- feature_post end-->

    <!-- social_connect_part part start-->
    <section class="social_connect_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="social_connect">
                        <div class="single-social_connect">
                            <div class="social_connect_img">
                                <img src="img/insta/instagram_1.png" class="" alt="blog">
                                <div class="social_connect_overlay">
                                    <a href="#"><span class="ti-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-social_connect">
                            <div class="social_connect_img">
                                <img src="img/insta/instagram_2.png" class="" alt="blog">
                                <div class="social_connect_overlay">
                                    <a href="#"><span class="ti-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-social_connect">
                            <div class="social_connect_img">
                                <img src="img/insta/instagram_3.png" class="" alt="blog">
                                <div class="social_connect_overlay">
                                    <a href="#"><span class="ti-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-social_connect">
                            <div class="social_connect_img">
                                <img src="img/insta/instagram_4.png" class="" alt="blog">
                                <div class="social_connect_overlay">
                                    <a href="#"><span class="ti-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-social_connect">
                            <div class="social_connect_img">
                                <img src="img/insta/instagram_5.png" class="" alt="blog">
                                <div class="social_connect_overlay">
                                    <a href="#"><span class="ti-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-social_connect">
                            <div class="social_connect_img">
                                <img src="img/insta/instagram_6.png" class="" alt="blog">
                                <div class="social_connect_overlay">
                                    <a href="#"><span class="ti-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- social_connect_part part end-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>about us</h4>
                    <p>Heaven fruitful doesn't over the lesser days appear cree ping seasons so behold bea Place likeness female form. Lesser Was green image lights fowl.</p>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>
                            <p>Address :Your address goes
                                here, your demo address.</p>
                        </li>
                        <li>
                            <p>Phone : +8880 44338899</p>
                        </li>
                        <li>
                            <p>Email : info@colorlib.com</p>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Important Link</h4>
                    <ul>
                        <li><a href="#">WHMCS-bridge</a></li>
                        <li><a href="#">Search Domain</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Our Main Shop</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days open</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase"><i class="ti-arrow-right"></i></button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright_text">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="copyright_part">
                            <p class="footer-text m-0">Copyright © 2019 All rights reserved <span class="px-2">|</span> This template is Made with <a href="http://colorlib.com"><i class="ti-heart"></i></a> by <a href="http://colorlib.com">Colorlib</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-right">
                        <div class="footer-social">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>