<?php require 'db.php'; ?>
<?php include 'admin.php';
?>
<?php
$pdostat = $bdd->prepare('Select * FROM categorie ');
$executeISOk = $pdostat->execute();
$s = $pdostat->fetchAll();
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
    $req = $bdd->prepare("INSERT INTO categorie SET  nom_cat = ?,img_cat = ? ");
    $req->execute([$_POST["nom-cat"], $fileName]);
    header("location:categorie.php");
    exit();
}
?>
<fieldset class=" w-100">
    <legend>Remplir ce formulaire :</legend>
    <form action="" method="post" enctype="multipart/form-data">
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
    <a href="categorie.php"><input type="submit" class="btn" value="Voir les Categories"></a>
</fieldset>

<?php include "footer.php"; ?>