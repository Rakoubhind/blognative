<?php require 'db.php'; ?>



<div class="col-12">
                <div class="form-group">
                
                  <input class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message'>
                    <?php
                    if(isset($error_msg['message'])){
                        echo "<div class='error'>" .$error_msg['message']."</div>" ;
                    }
                  ?>
                </div>
               
              </div>
<?php
$pdostat = $bdd->prepare('Select * FROM contact  ');
$executeISOk = $pdostat->execute();
$s = $pdostat->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
     if(isset($_POST['submit']))
     {
         $message=$_POST['message'];
         $name=$_POST['name'];
         $email=$_POST['email'];
         $subject=$_POST['subject'];
         if(empty($message)){
            echo ("the message is required");
        }
         if(empty($name)){
             echo ("the name is required");
         }
         if(empty($email)){
            echo ("the email is required");
        }
        if(empty($subject)){
            echo ("the subject is required");
        }
        else{
        $req = $bdd->prepare("INSERT INTO contact SET message_contact = ?,name_contact = ?,email_contact = ?,subject_contact = ? ");
        $req->execute([$_POST['message'], $_POST['name'], $_POST['email'], $_POST['subject']]);
         
            exit();
        }
       }
       <?php
$pdostat = $bdd->prepare('Select * FROM contact ');
$executeISOk = $pdostat->execute();
$s = $pdostat->fetchAll();
if(!empty($_POST)){

$req = $bdd->prepare("INSERT INTO contact SET message_contact = ?,name_contact = ?,email_contact = ?,subject_contact = ? ");
$req->execute([$_POST['message'], $_POST['name'], $_POST['email'], $_POST['subject']]);
    
    exit();
}

?>

   ?> 
</body>
</html>