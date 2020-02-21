<?php require 'db.php' ?>
<?php include "nav.php" ;
    include 'sidebar.php'; ?>
<?php
if (isset($_POST['update'])){
    $fileName = $_FILES['imageart']['name'];
        $fileTmpName = $_FILES['imageart']['tmp_name'];
        $fileError = $_FILES['imageart']['error'];
        if($fileError === 0){
            $fileDestination = 'uploads/article/'.$fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
        }else {
            echo "There was an error";
        }


$pdostat= $bdd->prepare('UPDATE article set title=:title ,contenu=:contenu ,image_article=:image_article ,
 date_article=:date_article ,id_auteur=:id_auteur , id_categorie=:id_categorie where id_article=:num 
 LIMIT 1');
$pdostat->bindValue(':num',$_POST["numar"], PDO::PARAM_INT);
$pdostat->bindValue(':title',$_POST["titleart"], PDO::PARAM_STR);
$pdostat->bindValue(':contenu',$_POST["contenuart"], PDO::PARAM_STR);
$pdostat->bindValue(':image_article',$_POST["imageart"], PDO::PARAM_STR);
$pdostat->bindValue(':date_article',$_POST["dateart"], PDO::PARAM_STR);
$pdostat->bindValue(':id_auteur',$_POST["taskOption1"], PDO::PARAM_STR);
$pdostat->bindValue(':id_categorie',$_POST["taskOption2"], PDO::PARAM_STR);

$executeISOk =$pdostat->execute();

if($executeISOk){
    echo "l'article  a été mise-à-jour";
   
    
 }
 else{
     echo"Echec de la mise-à-jour";
 }

}

?>












<?php include 'footer.php' ?>