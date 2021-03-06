<?php require 'db.php'; ?>
    <?php include "admin.php" ;?>
<?php
$pdostat= $bdd->prepare('SELECT * FROM article where id_article= :num ');
$pdostat->bindValue(':num', $_GET['numar'], PDO::PARAM_INT);
$executeISOk =$pdostat->execute();
$article=$pdostat->fetch();
$pdostat_cat= $bdd->prepare('SELECT * FROM categorie ');
$executeISOk =$pdostat_cat->execute();
$categories=$pdostat_cat->fetchAll();
$pdostat_aut= $bdd->prepare('SELECT * FROM auteur ');
$executeISOk =$pdostat_aut->execute();
$auteurs=$pdostat_aut->fetchAll();

?>
<fieldset class=" w-100"> 
        <legend>Remplir ce formulaire :</legend>
    <form action="modifierar.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <input type="hidden"  name="numar" value="<?= $article['id_article'];?>">
    </div>
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
    <label for="dd"><span> Nom auteur :<span class="required">*</span></span></label> <select name="taskOption1">
    <?php foreach ($auteurs as $auteur) :?>
    <option value="<?= $auteur['id_auteur'] ?>"><?= $auteur['fullname'] ?></option>
    <?php endforeach ;?>
</select>
    </div>
    <div class="form-group">
    <label for="dd"><span> Nom categorie:<span class="required">*</span></span></label> <select name="taskOption2">
    <?php foreach ($categories as $categorie) :?>
    <option value="<?= $categorie['id_categorie']?>"><?= $categorie['nom_cat'] ?></option>
    <?php endforeach ;?>
</select>
    </div>
    <input type="submit" class="btn" value="enregistrer" name="update">
    </form>
    </fieldset>
    <?php include "footer.php" ; ?>