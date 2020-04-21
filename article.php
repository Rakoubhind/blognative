<?php require 'db.php'; ?>
<?php include 'admin.php'; ?>
<?php
$pdostat = $bdd->prepare('Select * FROM article ');
$executeISOk = $pdostat->execute();
$s = $pdostat->fetchAll();
if (isset($_POST['titleart'])){
    $fileName = $_FILES['imageart']['name'];
    $fileTmpName = $_FILES['imageart']['tmp_name'];
    $fileError = $_FILES['imageart']['error'];
    if($fileError === 0){
        $fileDestination = 'uploads/article/'.$fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
    }else {
        echo "There was an error";
    }

}
?>
<div class="container">
        <div class="col-lg-12 p-5  bg-white rounded shadow-sm mb-5" >
          <div class="table table-striped table-hover">
              <table >
                <thead>
                  <tr>
                      <th>Images </th>
                      <th>Nom Article </th>
                      <th>Description </th>
                      <th >Actions </th>
                     
                  </tr>
              </thead>
             <tbody>
             <?php foreach ($s as $article) : ?>
                    <tr >
                   <td> <img class="card-img-top" src='uploads\article\<?= $article['image_article']?>' alt="Card image" style="width:250px; height:250px;"></td>
                      <td ><a href="#" style="font-size:20px;" ><?= $article['title'] ?></a></td>
                      <td> <a href="#" style="font-size:20px;" ><?= substr($article['contenu'], 0, 20)  ?>.....</a></td>
                     <td>
                      <a href="modifierarticle.php?numar=<?= $article['id_article'] ?>" ><i class="material-icons"style="color:#FF6200";>&#xE254;</i></a>
                      <a href="suppar.php?numar=<?= $article['id_article'] ?>"> <i class="material-icons" style="color:red;">&#xE872;</i> </a>
                        <a href="comment.php?numar=<?= $article['id_article'] ?>"><i class="fa fa-comments" style="font-size:30px;"></i></a>
                  
                      </a>
                    </td>
                    
                  </tr>
                <?php endforeach; ?>
             </tbody>
            </table>
             </div>
        </div>
     </div>
     
     </div>