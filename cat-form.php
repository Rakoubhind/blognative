<?php require 'db.php'; ?>
<?php include 'nav.php';
include 'sidebar.php'; ?>
<?php
$pdostat = $bdd->prepare('Select * FROM categorie ');
$executeISOk = $pdostat->execute();
$s = $pdostat->fetchAll();
if (!empty($_POST)) {
    $req = $bdd->prepare("INSERT INTO categorie SET  nom_cat = ?, img_cat = ? ");
    $req->execute([$_POST['nom-cat'], $_POST['imagecat']]);
    header("location:categorie.php");
    exit();
}
?>
<fieldset class=" w-100">
    <legend>Remplir ce formulaire :</legend>
    <form action="" method="post">
        <div class="form-group">
            <label for="dd"> <span> Name Categorie :<span class="required">*</span></span></label> <input type="text" class="form-control1" name="nom-cat">
        </div>
        <br>
        <div class="form-group">
            <label for="dd"><span>Image :<span class="required">*</span></span></label> <input type="file" class="form-control2" name="imagecat">
        </div>
        <br>
        <br>
        <a href="categorie.php"><input type="submit" class="btn" value="Inserer"></a>
    </form>
</fieldset>
<?php include "footer.php"; ?>