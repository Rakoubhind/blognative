<?php require 'db.php'; ?>
<!DOCTYPE html>
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
<header class="main_menu">
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
                                    <a class="nav-link" href="article1.php">Articles</a>
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
    </header>
    <?php
$pdostat = $bdd->prepare('Select image_article , title ,contenu , nom_cat , date_article ,fullname  FROM article INNER JOIN auteur ON article.id_auteur=auteur.id_auteur INNER JOIN categorie ON article.id_categorie=categorie.id_categorie AND id_article=:num');
$pdostat->bindValue(':num', $_GET['numar'], PDO::PARAM_INT);
$executeISOk = $pdostat->execute();
$s = $pdostat->fetchAll();
?>
<div class="container " style="padding:50px;">
  <?php foreach ($s as $article) : ?>
    <img style="float:right; width:500px;height:300px;" src='uploads\article\<?= $article['image_article']?>' alt="">
    <h1 style="color:#780F13;" ><?= $article['title']; ?></h1>
    <p><span style="font-size:1.2em;"> <span style="color:#C00417;">Cet article est crée par :</span> </span> <?= $article['fullname']; ?> </p>
    <p> <span style="font-size:1.2em;"> <span style="color:#C00417;">Le contenu :</span><?= $article['contenu']; ?></p>
    <p> <span style="font-size:1.2em;"> <span style="color:#C00417;">Categorie : </span> <?= $article['nom_cat']; ?> </p>
    <p> <span style="font-size:1.2em;"> <span style="color:#C00417;">La date : </span> <?= $article['date_article']; ?> </p>

  <?php endforeach; ?>
  
  <?php include "traitcomm.php"; ?>   
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