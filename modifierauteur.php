<?php require 'db.php'; ?>
    <?php include "nav.php" ;
    include 'sidebar.php'; ?>
<?php
$pdostat= $bdd->prepare('SELECT * FROM auteur where id_auteur= :num ');
$pdostat->bindValue(':num', $_GET['numauteur'], PDO::PARAM_INT);
$executeISOk =$pdostat->execute();
$auteur=$pdostat->fetch();
?>
    <fieldset class=" w-100"> 
        <legend>Modifier le formulaire :</legend>
    <form action="modifieraut.php" method="post">
    <div class="form-group">
 <input type="hidden"  class="form-control1" name="numauteur" value="<?= $auteur['id_auteur'];?>">
    </div>
    <div class="form-group">
    <label for="dd"> <span>Full Name :<span class="required">*</span></span></label> <input type="text"  class="form-control1" name="full-auteur" value="<?= $auteur['fullname'];?>">
    </div>
    <br>
    <div class="form-group">
    <label for="dd"><span>Email :<span class="required">*</span></span></label> <input type="Email" class="form-control2" name="email-auteur" value="<?= $auteur['email'];?>" >
    </div>
    <br>
    <div class="form-group">
    <label for="dd"> <span>Avatar :<span class="required">*</span></span></label> <input type="file"  class="form-control3" name="avatar-auteur"style="color:#FF6200;" value="<?= $auteur['avatar'];?>">
    </div>
    <br>
   <input type="submit" class="btn" value="Enregistrer">
    </form>
    <?php include "footer.php" ; ?>