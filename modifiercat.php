<?php require 'db.php' ?>
<?php include "admin.php" ;
    ?>
    
<?php
if (isset($_POST['nom-cat'])) {
    $fileName = $_FILES['imagecat']['name'];
    $fileTmpName = $_FILES['imagecat']['tmp_name'];
    $fileError = $_FILES['imagecat']['error'];
    if ($fileError === 0) {
        $fileDestination = 'uploads/categorie/'.$fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
    } else {
        echo "There was an error";
    }
   
    
$pdostat= $bdd->prepare('UPDATE categorie set nom_cat=:nom_cat , img_cat=:img_cat  where id_categorie=:num LIMIT 1');
$pdostat->bindValue(':num',$_POST["numcat"], PDO::PARAM_INT);
$pdostat->bindValue(':nom_cat',$_POST["nom-cat"], PDO::PARAM_STR);
$pdostat->bindValue(':img_cat',$_POST["imagecat"], PDO::PARAM_STR);
$executeISOk =$pdostat->execute();
$pdostat->execute([$_POST["nom-cat"], $fileName]);
if($executeISOk){
    header("location:categorie.php");
}

}
?>
