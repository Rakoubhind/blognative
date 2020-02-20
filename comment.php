<?php require 'db.php'; ?>
<?php include 'nav.php'; ?>
<?php
$pdostat= $bdd->prepare('Select * FROM commentaire where id_article=:num ');
$pdostat->bindValue(':num', $_GET["numar"], PDO::PARAM_INT);
$executeISOk =$pdostat->execute();
$s=$pdostat->fetchAll();
?>

<a href="article.php"><button class="button" style="font-size: 24px;margin-bottom:10px;" > Retour aux Articles</button></a>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 style="color:#EE4D2D;"> <b>Comment :</b></h2>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
            
                <thead>
                    <tr>
                        <th>Nike name </th>
                        <th>Contenu</th>
                    </tr>
                </thead>
                <?php foreach ($s as $commentaire) :?>
                <tbody>
                    <tr>
                        <td> <?= $commentaire['name_comm'] ?></td>
                        <td><?= $commentaire['contenu'] ?></td>
                        <td>
                        <a href="suppcomm.php?numcomm=<?=$commentaire["id_comm"]  ?>" ><i class="material-icons"style="color:#FF6200";>&#xE872;</i></a>
                        </td>
                    </tr>
               </tbody>
               <?php endforeach ;?>
                </table>
                <?php include "footer.php" ;?>
    