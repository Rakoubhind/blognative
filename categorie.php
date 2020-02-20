
<?php require 'db.php'; ?>
<?php
$pdostat= $bdd->prepare('Select * FROM categorie  ');
$executeISOk =$pdostat->execute();
$s=$pdostat->fetchAll();
?>
<?php require 'db.php'; ?>
<?php include 'nav.php'; 
?>
<a href="acceuil.php"><button class="button" style="font-size: 24px;margin-bottom:10px;" >Retour à l'Acceuil:</button></a>
<a href="cat-form.php"><button class="button1" style="font-size: 24px;margin:20px 0 0 00px;" ><i class="fa fa-plus"></i>Add new Categorie:</button></a>
 <div class="container">
      <h1 style="margin:50px 0 50px 0px;color:#FF6200;"> Categories Women'S Clothes :</h1>
      
      <div class="row mb-5 ">
      <?php foreach ($s as $categorie) :?>
                    <div class="card col-lg-4" style="height:450px;">
                        <img class="card-img-top" src= <?= $categorie['img_cat'] ?> alt="Card image" style="height: 300px;">
                        <div class="card-body">
                            <h4 class="card-title"> <?= $categorie['nom_cat'] ?></h4>
                            <a href="modifiercategorie.php?numcat=<?=$categorie['id_categorie']?>" class="btn " style="background-color:#FF6200;color:white; ">Modifier</a>
                            <a href="supcat.php?numcat=<?=$categorie['id_categorie']?>" class="btn " style="background-color:#FF6200;color:white; ">Supprimer</a>
                            <a href="affar.php?numcat=<?=$categorie['id_categorie']?>" class="btn " style="background-color:#FF6200;color:white; ">Afficher</a>
                        </div>
                    </div>
                    <?php endforeach ;?>
              
              </div>

<?php include "footer.php" ; ?>