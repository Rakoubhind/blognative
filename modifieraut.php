<?php require 'db.php' ?>
<?php include "nav.php" ;
    include 'sidebar.php'; ?>
<?php
$pdostat= $bdd->prepare('UPDATE auteur set fullname=:fullname ,email=:email ,avatar=:avatar where id_auteur=:num LIMIT 1');
$pdostat->bindValue(':num',$_POST["numauteur"], PDO::PARAM_INT);
$pdostat->bindValue(':fullname',$_POST["full-auteur"], PDO::PARAM_STR);
$pdostat->bindValue(':email',$_POST["email-auteur"], PDO::PARAM_STR);
$pdostat->bindValue(':avatar',$_POST["avatar-auteur"], PDO::PARAM_STR);
$executeISOk =$pdostat->execute();
if($executeISOk){
    echo "le contact a été mise-à-jour";
   
    
 }
 else{
     echo"Echec de la mise-à-jour";
 }
?>
<?php include 'footer.php' ?>