<?php require 'db.php'; ?>
    <?php include "admin.php" ;?>
<?php
$pdostat= $bdd->prepare('DELETE FROM auteur where id_auteur=:num Limit 1');
$pdostat->bindValue(':num',$_GET["numauteur"], PDO::PARAM_INT);
$executeISOk =$pdostat->execute();
   header("location:form-auteur.php");

?>
<?php include 'footer.php'; ?>