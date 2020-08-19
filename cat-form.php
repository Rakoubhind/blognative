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
    <legend>Remplir ce formulaire : <a href="logout.php" class="btn btn-info btn-lg" style="float:right;padding-top:10px;">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a></legend>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label for="formGroupExampleInput" style="color:blue;font-size:18px">
    Name Categories :</label> <input type="text" class="form-control" id="formGroupExampleInput"name="nom-cat">
        </div>
        <br>
        <div class="form-group">
        <label for="formGroupExampleInput" style="color:blue;font-size:18px">
  Image :</label>
        <input type="file" class="form-control2" name="imagecat">
        </div>
        <br>
        <br>
        <a href="categorie.php"><input type="submit" class="btn" value="Inserer" style="width:100px;font-size:20px;"></a>
        
    </form>
    <a href="categorie.php"><input type="submit" class="btn"  value="Voir les Categories" style="width:200px;font-size:20px;"></a>
</fieldset>

<?php include "footer.php"; ?>