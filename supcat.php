<?php require 'db.php'; ?>
    <?php include "nav.php" ;?>
<?php
$pdostat= $bdd->prepare('DELETE FROM categorie where id_categorie=:num Limit 1');
$pdostat->bindValue(':num',$_GET["numcat"], PDO::PARAM_INT);
$executeISOk =$pdostat->execute();
   header("location:categorie.php");

?>
<?php include 'footer.php'; ?>