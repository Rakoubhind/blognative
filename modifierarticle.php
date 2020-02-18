<?php require 'db.php'; ?>
    <?php include "nav.php" ;
    include 'sidebar.php'; ?>
<?php
$pdostat= $bdd->prepare('SELECT * FROM article where id_article= :num ');
$pdostat->bindValue(':num', $_GET['numar'], PDO::PARAM_INT);
$executeISOk =$pdostat->execute();
$article=$pdostat->fetch();
?>
<fieldset class=" w-100"> 
        <legend>Remplir ce formulaire :</legend>
    <form action="modifierar.php" method="post">
    <div class="form-group">
    <label for="dd"> <span> Title :<span class="required">*</span></span></label> <input type="text"  class="form-control1" name="titleart" value="<?= $article['title'];?>">
    </div>
    <br>
    <div class="form-group">
    <label for="dd"> <span> Contenu :<span class="required">*</span></span></label> <input type="text"  class="form-control1" name="contenuart" value="<?= $article['contenu'];?>">
    </div>
    <br>
    <div class="form-group">
    <label for="dd"><span>Image :<span class="required">*</span></span></label> <input type="file" class="form-control2" name="imageart" value="<?= $article['image_article'];?>" >
    </div>
    <div class="form-group">
    <label for="dd"><span>Date :<span class="required">*</span></span></label> <input type="text" class="form-control2" name="dateart" value="<?= $article['date_article'];?>" >
    </div>
    <div class="form-group">
    <label for="dd"><span>id-auteur :<span class="required">*</span></span></label> <select name="taskOption1" value="<?= $article['id_auteur'];?>">
    <?php foreach ($s as $article) :?>
    <option><?= $article['id_auteur'] ?></option>
    <?php endforeach ;?>
</select>
    </div>
    <div class="form-group">
    <label for="dd"><span>id-categorie:<span class="required">*</span></span></label> <select name="taskOption2" >
    <option value="<?= $article['id_categorie'];?>"></option>
</select>
    </div>
     <input type="submit" class="btn" value="Enregister">
    </form>
    </fieldset>
    <?php include "footer.php" ; ?>