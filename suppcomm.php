<?php require 'db.php'; ?>
    <?php include "nav.php" ;?>
<?php
$pdostat= $bdd->prepare('DELETE FROM commentaire where id_comm=:num Limit 1');
$pdostat->bindValue(':num',$_GET["numcomm"], PDO::PARAM_INT);
$executeISOk =$pdostat->execute();
   header("location:comment.php");

?>
<?php include 'footer.php'; ?>