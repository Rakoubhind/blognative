<style>
  #trait_dessus { border-top: 1px solid #000; width : 1100px; }
</style>
<?php

    if (isset($_GET['numar'])){
    $pdostat = $bdd->prepare('Select * FROM commentaire where id_article=:num');
    $pdostat->bindValue(':num', $_GET['numar'], PDO::PARAM_INT);
    $executeISOk = $pdostat->execute();
    $s = $pdostat->fetchAll();
    $id_article=$_GET['numar'];
    }
    ?>
    <div id="trait_dessus"></div>

    <h1 style="color:#780F13;">Comment:</h1>

    <?php foreach ($s as $commentaire ) :?>

    <p ><span style="font-size:1.5em;color:#C00417;padding:0 20px 0 20px;">Name :</span> <?= $commentaire['name_comm'] ?></p>
    <p><span style="font-size:1.5em;color:#C00417;padding:0 20px 0 0px;"> Contenu :</span><?= $commentaire['contenu'] ?></p>
    
    
    <?php endforeach ;?>
    
    <fieldset class=" w-100">
      <legend>Comment: </legend>
      <form  method="post" action ="test-com.php" enctype="multipart/form-data">
      <input type="text" hidden name="id_article" value="<?=$id_article?>">
        <div class="form-group " >
          <label for="dd"> <span> Nike name :<span class="required">*</span></span></label> <input type="text" class="form-control1" name="nomcomm">
        </div>
        <br>
        <div class="form-group">
          <label for="dd"> <span> Contenu :<span class="required">*</span></span></label> <textarea name="contenucomm" id="" cols="30" rows="5"></textarea>
        </div>
        <br>
        <a href=""></a><input type="submit" name ="inserer" class="btn"  style="background-color:#C00417;color:white; "value="Inserer">
      </form>
    </fieldset>                                   
  </div>
  <?php include "footer.php"; ?>