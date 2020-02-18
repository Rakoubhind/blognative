<?php require 'db.php'; ?>
    <?php include "nav.php" ;?>
<?php
$pdostat= $bdd->prepare('DELETE FROM article where id_article=:num Limit 1');
$pdostat->bindValue(':num',$_GET["numar"], PDO::PARAM_INT);
$executeISOk =$pdostat->execute();
   header("location:article.php");

?>
<?php include 'footer.php'; ?>