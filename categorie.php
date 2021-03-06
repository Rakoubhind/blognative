<?php require 'db.php';
include 'admin.php' ?>

<?php
$pdostat = $bdd->prepare('Select * FROM categorie  ');
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
</head>

<body>
    <!--::header part start::-->
    <!-- <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="logof.jpg" style="height:120px;"alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="category.php"> Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="article.php">Articles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">elements</a>
                                    </div>
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
    </header> -->
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <!-- <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle text-left">
                        <h2>Category Page</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Home<span>/</span>Category Page</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
   <div class="container">
        <div class="col-lg-12 p-5  bg-white rounded shadow-sm mb-5" >
          <div class="table table-striped table-hover">
              <table >
                <thead>
                  <tr>
                      <th>Images </th>
                      <th>Nom Categorie </th>
                      <th >Actions </th>
                     
                  </tr>
              </thead>
             <tbody>
                <?php foreach ($s as $categorie) : ?>
                    <tr >
                      <td><a href="#"><img src='uploads\categorie\<?= $categorie['img_cat'] ?>' alt="product img" style="width:250px; height:250px;"></a></td>
                      <td ><a href="#" style="font-size:20px;" ><?= $categorie['nom_cat'] ?></a></td>
                      <td>
                      <a style="font-size:100px;"href="modifiercategorie.php?numcat=<?= $categorie['id_categorie'] ?>" ><i class="material-icons"style="color:#FF6200";>&#xE254;</i></a>
                      <a href="supcat.php?numcat=<?= $categorie['id_categorie'] ?>"> <i class="material-icons" style="color:red;">&#xE872;</i> </a>
                     
                      </a>
                    </td>
                    
                  </tr>
                <?php endforeach; ?>
             </tbody>
            </table>
             </div>
        </div>
     </div>
     
     </div>
    <!-- <section class="social_connect_part">
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
    </section> -->

	<!-- <footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>about us</h4>
					<p>Heaven fruitful doesn't over the lesser days appear cree ping seasons so behold bea Place likeness female form. Lesser Was green image lights fowl.</p>
				</div>
				<div class="col-xl-3 col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Contact Info</h4>
					<ul>
						<li><p>Address :Your address goes
								here, your demo address.</p></li>
						<li><p>Phone : +8880 44338899</p></li>
						<li><p>Email : info@colorlib.com</p></li>
					</ul>
				</div>
				<div class="col-xl-3 col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Important Link</h4>
					<ul>
						<li><a href="#">WHMCS-bridge</a></li>
						<li><a href="#">Search Domain</a></li>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Shopping Cart</a></li>
						<li><a href="#">Our  Main Shop</a></li>
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
	</footer> -->
    <!-- footer part end-->

    <!-- jquery plugins here-->
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