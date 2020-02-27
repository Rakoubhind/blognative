<?php require 'db.php'; ?>
<?php include 'nav.php'; ?>
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
<?php include "footer.php"; ?>