<?php require 'db.php' ?>
<?php include "nav.php" ;
    include 'sidebar.php'; ?>
<?php
$pdostat= $bdd->prepare('UPDATE categorie set nom_cat=:nom_cat , img_cat=:img_cat  where id_categorie=:num LIMIT 1');
$pdostat->bindValue(':num',$_POST["numcat"], PDO::PARAM_INT);
$pdostat->bindValue(':nom_cat',$_POST["nom-cat"], PDO::PARAM_STR);
$pdostat->bindValue(':img_cat',$_POST["imagecat"], PDO::PARAM_STR);
$executeISOk =$pdostat->execute();
if($executeISOk){
    echo "le contact a été mise-à-jour";
   
 }
 else{
     echo"Echec de la mise-à-jour";
 }
?>
<?php include 'footer.php' ?>