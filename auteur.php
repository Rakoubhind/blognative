<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
        <title>Document</title>
</head>
<body> -->
    <?php include "nav.php" ;
    include 'sidebar.php'; ?>
    <!-- <section class="d-flex">
        <nav class="col-md-2 d-none d-md-block sidebar" style="background-color:#FF6200; ">
            <div class="sidebar-sticky">
                <ul class="nav flex-column ">
                    <li class="nav-item">
                        <a class="nav-link active" href="Acceuil.php" style="color:white;">
                            <span data-feather="home"></span>
                            Acceuil <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="auteur.php" style="color:white;">
                            <span data-feather="file"></span>
                            Categories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white;">
                            <span data-feather="shopping-cart"></span>
                            Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white;">
                            <span data-feather="users"></span>
                            Auteurs
                        </a>
                    </li>
                </ul>
            </div>

        </nav> --> 

        <!-- main -->
    <fieldset class="h-100 w-75"> 
        <legend>Remplir ce formulaire :</legend>
    <form action="" method="post">
    <div class="form-group">
    <label for="dd"> <span>Full Name :<span class="required">*</span></span></label> <input type="text"  class="form-control1" name="nom-tuteur">
    </div>
    <br>
    <div class="form-group">
    <label for="dd"><span>Email :<span class="required">*</span></span></label> <input type="Email" class="form-control2" name="prenom-tuteur" >
    </div>
    <br>
    <div class="form-group">
    <label for="dd"> <span>Avatar :<span class="required">*</span></span></label> <input type="file"  class="form-control3" name="email-tuteur"style="color:#FF6200;">
    </div>
    <br>
    
    <input type="submit" value="Inserer" name="boutton1" class="btn">
    <!-- <input type="submit" value="Modifier" name="boutton2" class="btn">
    <input type="submit" value="Supprimer" name="boutton3" class="btn"> -->
    </form>
    </fieldset>
    <?php include "footer.php" ; ?>
     