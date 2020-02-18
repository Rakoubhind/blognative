<?php require 'db.php'; ?>
<?php
$pdostat= $bdd->prepare("Select * FROM article  where id_categorie=:num");
$pdostat->bindValue(':num', $_GET["numcat"], PDO::PARAM_INT);
$executeISOk =$pdostat->execute();
$s=$pdostat->fetchAll();
?>
<?php require 'db.php'; ?>
<?php include 'nav.php'; ?>
<a href="Acceuil.php"><button class="button" style="font-size: 24px;margin-bottom:10px;" >Retour à l'Acceuil:</button></a>
<a href="form-article.php"><button class="button1" style="font-size: 24px;margin:20px 0 0 00px;" ><i class="fa fa-plus"></i>Add new Article:</button></a>
 <div class="container">
      <h1 style="margin:50px 0 50px 0px;color:#FF6200;"> Articles Women'S Clothes :</h1>
      <div class="row mb-5 ">
      <?php foreach ($s as $article) :?>
                    <div class="card col-lg-4" style="height:450px;">
                        <img class="card-img-top" src= <?= $article['image_article'] ?> alt="Card image" style="height: 300px;">
                        <div class="card-body">
                            <h4 class="card-title"> <?= $article['title'] ?></h4>
                            <p class="card-text"> <?= $article['contenu'] ?></p>
                    </div>
                    </div>
                    <?php endforeach ;?>
              
              </div>

<?php include "footer.php" ; ?>