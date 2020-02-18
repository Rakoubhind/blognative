<?php require 'db.php' ?>
<?php include "nav.php" ;
    include 'sidebar.php'; ?>
<?php
$pdostat= $bdd->prepare('UPDATE article set title=:title ,contenu=:contenu ,image_article=:image_article , date_article=:date_article ,id_auteur=:id_auteur , id_categorie=:id_categorie where id_article=:num LIMIT 1');
$pdostat->bindValue(':title',$_POST["numar"], PDO::PARAM_INT);
$pdostat->bindValue(':contenu',$_POST["titleart"], PDO::PARAM_STR);
$pdostat->bindValue(':image_article',$_POST["contenuart"], PDO::PARAM_STR);
$pdostat->bindValue(':date_article',$_POST["dateartauteur"], PDO::PARAM_STR);
$pdostat->bindValue(':id_auteur',$_POST["taskOption1"], PDO::PARAM_STR);
$pdostat->bindValue(':id_categorie',$_POST["taskOption2"], PDO::PARAM_STR);
$executeISOk =$pdostat->execute();
if($executeISOk){
    echo "le contact a été mise-à-jour";
   
    
 }
 else{
     echo"Echec de la mise-à-jour";
 }
?>
<?php include 'footer.php' ?>