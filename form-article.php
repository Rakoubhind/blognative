<?php require 'db.php'; ?>
<?php include 'admin.php'; ?>
<?php
$pdostat = $bdd->prepare('Select title ,contenu , image_article , fullname ,nom_cat   FROM article INNER JOIN auteur ON article.id_auteur=auteur.id_auteur INNER JOIN categorie ON article.id_categorie=categorie.id_categorie ');
$executeISOk = $pdostat->execute();
$s = $pdostat->fetchAll();
// definir le chemin du fichier 
if (isset($_POST['submit'])){
	    $fileName = $_FILES['imageart']['name'];
        $fileTmpName = $_FILES['imageart']['tmp_name'];
        $fileError = $_FILES['imageart']['error'];
        if($fileError === 0){
            $fileDestination = 'uploads/article/'.$fileName;
            move_uploaded_file($fileTmpName, $fileDestination);}
        // else {
        //     echo "There was an error";
        
        // {
            if($_POST['titleart'] == ""){
               $error_msg['titleart']="the title is required";
           }
            if($_POST['contenuart'] == ""){
               $error_msg['contenuart']="the context is required";
            }
            // if($_POST['imageart']== ""){
            //    $error_msg['imageart']="the image is required"; }
           
          
           if($_POST['dateart']== ""){
               $error_msg['dateart']="the date is required";
           }
           if($_POST['taskOption1']== ""){
            $error_msg['taskOption1']="the nom auteur is required";
        }
          if($_POST['taskOption2']== ""){
         $error_msg['taskOption2']="the nom auteur is required";}
           else {
    $req = $bdd->prepare("INSERT INTO article SET title =?, contenu =?,date_article = ?, id_auteur =?,id_categorie = ? ,image_article= ?");
    $req->execute([$_POST['titleart'], $_POST['contenuart'], $_POST['dateart'], $_POST['taskOption1'], $_POST['taskOption2'], $fileName]);
    header("location:article.php");
    exit(); }
}
        
?>
<fieldset class=" w-100">
    <!-- <div class="d-flex"> -->
    <legend>Remplir ce formulaire :<a href="logout.php" class="btn btn-info btn-lg" style="float:right;padding-top:10px;">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a></legend> 
<!-- </div> -->
    <form  method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="formGroupExampleInput" style="color:blue;font-size:18px">
    Title :</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="titleart" >

        <!-- <div class="form-group">
            <label for="dd" > <span style="margin-top:50px;"> Title :<span class="required" >*</span></span></label> <input type="text"  name="titleart">
            <?php
                    if(isset($error_msg['titleart'])){
                        echo "<div class='error'>" .$error_msg['titleart']."</div>" ;
                    }
                  ?>
        </div> -->
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput" style="color:blue;font-size:18px">
   Contenu:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="contenuart" >

            <?php
                    if(isset($error_msg['contenuart'])){
                        echo "<div class='error'>" .$error_msg['contenuart']."</div>" ;
                    }
                  ?>
        </div>
        <br>
        <div class="form-group">
        <label for="formGroupExampleInput" style="color:blue;font-size:18px">
   Image:</label>
   <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFileLang" lang="fr" name="imageart">
  <label class="custom-file-label" for="customFileLang">Selectionner un fichier</label>
</div>
  
       
            <?php
                    if(isset($error_msg['imageart'])){
                        echo "<div class='error'>" .$error_msg['imageart']."</div>" ;
                    }
                  ?>
        
        </div>
        <div class="form-group">
        <label for="formGroupExampleInput" style="color:blue;font-size:18px">
   Date:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="dateart" >

            <?php
                    if(isset($error_msg['dateart'])){
                        echo "<div class='error'>" .$error_msg['dateart']."</div>" ;
                    }
                  ?>
        </div>
        <div class="form-group">
        <label for="formGroupExampleInput" style="color:blue;font-size:18px">
   Nom auteur:</label>
        <select name="taskOption1" class="custom-select custom-select-lg mb-3">
                <?php foreach ($s as $article) : ?>
                    <option><?= $article['fullname'] ?></option>
                <?php endforeach; ?>
            
                <?php
                    if(isset($error_msg['taskOption1'])){
                        echo "<div class='error'>" .$error_msg['taskOption1']."</div>" ;
                    }
                  ?></select>
        </div>
        <div class="form-group">
        <label for="formGroupExampleInput" style="color:blue;font-size:18px">
   Nom categorie:</label>
            <select name="taskOption2" class="custom-select custom-select-lg mb-3">
                <?php foreach ($s as $article) : ?>
                    <option><?= $article['nom_cat'] ?></option>
                <?php endforeach; ?>
            
                <?php
                    if(isset($error_msg['taskOption2'])){
                        echo "<div class='error'>" .$error_msg['taskOption2']."</div>" ;
                    }
                  ?></select>
        </div>
        <a href="article.php"><input type="submit" name ="submit" class="btn" value="Inserer"style="width:100px;font-size:20px;"></a>
    </form>
    <a href="article.php"><input type="submit" class="btn" value="Voir les articles" name="submit" style="width:200px;font-size:20px;"></a>
</fieldset>
<?php
 include "footer.php";
 ?>