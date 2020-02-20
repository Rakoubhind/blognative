
<?php require 'db.php'; ?>
<?php include "nav.php" ;?>
<?php
$pdostat= $bdd->prepare('Select * FROM auteur ');
$executeISOk =$pdostat->execute();
$s=$pdostat->fetchAll();
?>

<a href="auteur.php"><button class="button" style="font-size: 24px;margin-bottom:10px;" > Retour au Formulaire</button></a>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2> <b>Users :</b></h2>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
            
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
						<th>Avatar</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php foreach ($s as $auteur) :?>
                <tbody>
                    <tr>
                        <td> <?= $auteur['fullname'] ?></td>
                        <td><?= $auteur['email'] ?></td>
						<td><?= $auteur['avatar'] ?></td>
                        <td>
                        <a href="modifierauteur.php?numauteur=<?=$auteur["id_auteur"]  ?>" ><i class="material-icons" >&#xE254;</i></a>
                        <a href="suppauteur.php?numauteur=<?=$auteur["id_auteur"]  ?>" ><i class="material-icons"style="color:#FF6200";>&#xE872;</i></a>
                        </td>
                    </tr>
               </tbody>
               <?php endforeach ;?>
                </table>
                <?php include "footer.php" ;?>
    