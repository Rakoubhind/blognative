<?php require 'db.php'; ?>
    <?php include "admin.php" ;
?>
<?php
$pdostat= $bdd->prepare('SELECT * FROM categorie where id_categorie= :num ');
$pdostat->bindValue(':num', $_GET['numcat'], PDO::PARAM_INT);
$executeISOk =$pdostat->execute();
$categorie=$pdostat->fetch();
?>
    <fieldset class=" w-100"> 
        <legend>Modifier le formulaire :</legend>
    <form action="modifiercat.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <input type="hidden"  class="form-control1" name="numcat" value="<?= $categorie['id_categorie'];?>">
    </div>
    <div class="form-group">
    <label for="dd"> <span> Name Categorie :<span class="required">*</span></span></label> <input type="text"  class="form-control1" name="nom-cat" value="<?= $categorie['nom_cat'];?>">
    </div>
    <br>
    <div class="form-group">
    <label for="dd"><span>Image :<span class="required">*</span></span></label> <input type="file" class="form-control2" name="imagecat" value="<?= $categorie['img_cat'];?>" >
    </div>
    <br>
    <br>
   <input type="submit" class="btn" value="Enregistrer" name="update">
    </form>
    </fieldset>
