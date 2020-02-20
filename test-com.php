<?php if (isset($_POST['inserer'])){
    require 'db.php';
        // echo $_POST['id_article'];
        // echo "hhhh";
        // echo $_POST['nomcomm']."<br>";
        // echo $_POST['contenucomm']."<br>";
        // echo $_POST['id_article'];

        
       
          $req = $bdd->prepare("INSERT INTO commentaire SET  name_comm = ? , contenu = ?, id_article =?");
          $req->execute([$_POST['nomcomm'], $_POST['contenucomm'],$_POST['id_article'] ]);
        //   exit();
        // //   header("location:readm.php?id_article=".$_POST['id_article']);
   header("location:readm.php?numar=".$_POST['id_article']);
  
        }
