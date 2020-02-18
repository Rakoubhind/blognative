<?php require 'db.php'; ?>
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>
<?php
$pdostat= $bdd->prepare('Select * FROM article LIMIT 9  ');
$executeISOk =$pdostat->execute();
$s=$pdostat->fetchAll();
?>

 <div class="container">
      <h1 style="margin:50px 0 50px 0px;color:#FF6200;"> Articles Women'S Clothes :</h1>
      <div class="row mb-5 ">
      <?php foreach ($s as $article) :?>
                    <div class="card col-lg-4" style="height:450px;">
                        <img class="card-img-top" src= <?= $article['image_article'] ?> alt="Card image" style="height: 300px;">
                        <div class="card-body">
                            <h4 class="card-title"> <?= $article['title'] ?></h4>
                            <p class="card-text"> <?= $article['contenu'] ?></p>
                            <a href="readmore.php?numarticle=<?=$article["id-article"]  ?>" class="btn " style="background-color:#FF6200;color:white; ">Read More...</a>
                        
                    </div>
                    </div>
                    <?php endforeach ;?>
              
              </div>

<?php include "footer.php" ; ?>

