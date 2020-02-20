<?php require 'db.php'; ?>
<?php include 'nav.php';
include 'sidebar.php'; ?>
<?php



$pdostat = $bdd->prepare('Select * FROM article ');
$executeISOk = $pdostat->execute();
$s = $pdostat->fetchAll();
if (isset($_POST['titleart'])){
    include 'upload.php';
    $req = $bdd->prepare("INSERT INTO article SET title =?, contenu =?,date_article = ?, id_auteur =?,id_categorie = ? ,image_article= ?");
    $req->execute([$_POST['titleart'], $_POST['contenuart'], $_POST['dateart'], $_POST['taskOption1'], $_POST['taskOption2'], $fileName]);
    header("location:article.php");
    exit();
}
?>
<fieldset class=" w-100">
    <legend>Remplir ce formulaire :</legend>
    <form  method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="dd"> <span> Title :<span class="required">*</span></span></label> <input type="text"  name="titleart">
        </div>
        <br>
        <div class="form-group">
            <label for="dd"> <span> Contenu :<span class="required">*</span></span></label> <input type="text"  name="contenuart">
        </div>
        <br>
        <!-- <div class="form-group">
            <label for="dd"><span>Image :<span class="required">*</span></span></label> <input type="file"  name="imgarticle">
        </div> -->
        <div class="form-group">
            <label for="dd"> <span> Image :<span class="required">*</span></span></label> <input name="imageart"  type="file"  >
        </div>
        <div class="form-group">
            <label for="dd"><span>Date :<span class="required">*</span></span></label> <input type="text"  name="dateart">
        </div>
        <div class="form-group">
            <label for="dd"><span> Nom auteur :<span class="required">*</span></span></label> <select name="taskOption1">
                <?php foreach ($s as $article) : ?>
                    <option><?= $article['id_auteur'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="dd"><span> Nom categorie:<span class="required">*</span></span></label> <select name="taskOption2">
                <?php foreach ($s as $article) : ?>
                    <option><?= $article['id_categorie'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <a href="article.php"><input type="submit" class="btn" value="Inserer"></a>
    </form>
</fieldset>
<?php include "footer.php"; ?>