<?php require 'db.php'; ?>
<?php include 'nav.php'; ?>
<?php
$pdostat = $bdd->prepare('Select * FROM article ');
$executeISOk = $pdostat->execute();
$s = $pdostat->fetchAll();
if (isset($_POST['titleart'])){
    $fileName = $_FILES['imageart']['name'];
    $fileTmpName = $_FILES['imageart']['tmp_name'];
    $fileError = $_FILES['imageart']['error'];
    if($fileError === 0){
        $fileDestination = 'uploads/article/'.$fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
    }else {
        echo "There was an error";
    }

}
?>
<div class="container">
<a href="form-article.php"><button class="button1" style="font-size: 24px;margin:20px 0 0 00px;color:#C00417;"><i class="fa fa-plus"></i>Add new Article:</button></a>
    <h1 style="margin:50px 0 50px 0px;color:#780F13;"> Articles Fashion Clothes :</h1>
    <div class="row mb-5 ">
        <?php foreach ($s as $article) : ?>
            <div class="card col-lg-4" style="height:450px;">
               <img class="card-img-top" src='uploads\article\<?= $article['image_article']?>' alt="Card image" style="height: 300px;">
               
                <div class="card-body">
                    <h4 class="card-title"> <?= $article['title'] ?></h4>
                    <p class="card-text"> <?= substr($article['contenu'], 0, 20)  ?>.....</p>
                  
                        <a href="modifierarticle.php?numar=<?= $article['id_article'] ?>" class="btn " style="background-color:#C00417;color:white;width:100px;display:inline-block; ">Modifier</a>
                        <a href="suppar.php?numar=<?= $article['id_article'] ?>" class="btn " style="background-color:#C00417;color:white;display:inline-block; ">Supprimer</a>
                        <a href="comment.php?numar=<?= $article['id_article'] ?>" class="btn " style="background-color:#C00417;color:white;display:inline-block;">Comm</a>
                  
                </div>
            </div>
        <?php endforeach; ?>

    </div>
z
    <?php include "footer.php"; ?>