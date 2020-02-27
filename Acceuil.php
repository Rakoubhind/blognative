<?php require 'db.php'; ?>
<?php include 'nav.php'; ?>
<?php
$pdostat = $bdd->prepare('Select * FROM article LIMIT 9  ');
$executeISOk = $pdostat->execute();
$s = $pdostat->fetchAll();

?>
<style>
    h5 {
        font-family: 'Brandon Grotesque', Helvetica, Arial, Lucida, sans-serif;
        color: #000 !important;
        letter-spacing: 5px;
        font-size: 14px;
        border-bottom: 1px solid #e6e6e6;
        margin-top: 50px;

    }
</style>
<div class="container " style="margin-top:50px;">
    <section>
        <h5 style="text-align: center;"><b>THE LATEST</b> </h5>
        <div class="row mb-5 ">
            <?php foreach ($s as $article) : ?>
                <div class="card col-lg-4" style="height:470px; margin-left:50px;">
                    <img class="card-img-top" src=uploads\article\<?= $article['image_article'] ?> alt="Card image" style="height: 300px;">
                    <div class="card-body">
                        <h4 class="card-title"> <?= $article['title'] ?></h4>
                        <p class="card-text"> <?= substr($article['contenu'], 0, 30) ?>....</p>
                        <a href="readm.php?numar=<?= $article["id_article"]  ?>" class="btn " style="background-color:#C00417;color:white; ">Read More...</a>

                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </section>

    </div>
    <div>
        <h2 class="homepage-sections--title">SUIVEZ-NOUS SUR INSTAGRAM</h2>
        <div class="row ">
            <img src="img1.png "class="col-3">
            <img src="img2.png"class="col-3"  >
            <img src="img3.png"class="col-3"  >
            <img src="img4.png"class="col-3"  >

        </div>
        <?php include "testfoot.php"; ?>



        <?php include "footer.php"; ?>