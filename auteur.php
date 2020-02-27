  <?php require 'db.php'; ?>
    <?php include "nav.php" ; ?>
<?php
$pdostat= $bdd->prepare('Select * FROM auteur ');
$executeISOk =$pdostat->execute();
$s=$pdostat->fetchAll();
if(!empty($_POST)){
    $req = $bdd->prepare("INSERT INTO auteur SET  fullname = ?, email = ?, avatar = ?");
    $req->execute([validation($_POST['full-auteur']),$_POST['email-auteur'], $_POST['avatar-auteur']]);
    header("location:form-auteur.php");
    exit();
}
?>
    <fieldset class=" w-100"> 
        <legend>Remplir ce formulaire :</legend>
    <form action="" method="post">
    <div class="form-group">
    <label for="dd"> <span>Full Name :<span class="required">*</span></span></label> <input type="text"  class="form-control1" name="full-auteur">
    </div>
    <br>
    <div class="form-group">
    <label for="dd"><span>Email :<span class="required">*</span></span></label> <input type="Email" class="form-control2" name="email-auteur" >
    </div>
    <br>
    <div class="form-group">
    <label for="dd"> <span>Avatar :<span class="required">*</span></span></label> <input type="file"  class="form-control3" name="avatar-auteur"style="color:#FF6200;">
    </div>
    <br>
   <a href="form-auteur.php"><input type="submit" class="btn" value="Inserer"></a>
    </form>
    </fieldset>
    <?php include "footer.php" ; ?>