<?php require 'db.php'; ?>
<?php include 'nav.php';
include 'sidebar.php'; ?>
<?php
$pdostat= $bdd->prepare('Select * FROM article  ');
$executeISOk =$pdostat->execute();
$s=$pdostat->fetchAll();
if(!empty($_POST)){
    $req = $bdd->prepare("INSERT INTO article SET title =?, contenu =?,image_article=?,date_article = ?, id_auteur= ?,id_categorie = ?");
    $req->execute([$_POST['titleart'],$_POST['contenuart'],$_POST['imageart'],$_POST['dateart'],$_POST['taskOption1'],$_POST['taskOption2']]);
    header("location:article.php");
    exit();
}
?>
<fieldset class=" w-100"> 
        <legend>Remplir ce formulaire :</legend>
    <form action="" method="post">
    <div class="form-group">
    <label for="dd"> <span> Title :<span class="required">*</span></span></label> <input type="text"  class="form-control1" name="titleart">
    </div>
    <br>
    <div class="form-group">
    <label for="dd"> <span> Contenu :<span class="required">*</span></span></label> <input type="text"  class="form-control1" name="contenuart">
    </div>
    <br>
    <div class="form-group">
    <label for="dd"><span>Image :<span class="required">*</span></span></label> <input type="file" class="form-control2" name="imageart" >
    </div>
    <div class="form-group">
    <label for="dd"><span>Date :<span class="required">*</span></span></label> <input type="text" class="form-control2" name="dateart" >
    </div>
    <div class="form-group">
    <label for="dd"><span>id-auteur :<span class="required">*</span></span></label> <select name="taskOption1">
    <?php foreach ($s as $article) :?>
    <option><?= $article['id_auteur'] ?></option>
    <?php endforeach ;?>
</select>
    </div>
    <div class="form-group">
    <label for="dd"><span>id-categorie:<span class="required">*</span></span></label> <select name="taskOption2">
    <?php foreach ($s as $article) :?>
    <option><?= $article['id_categorie'] ?></option>
    <?php endforeach ;?>
</select>
    </div>
   <a href="article.php"><input type="submit" class="btn" value="Inserer"></a>
    </form>
    </fieldset>
    <?php include "footer.php" ; ?>