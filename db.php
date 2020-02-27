<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blognative;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
<?php 
function validation($data)
{        $data=strip_tags($data);
        $data=trim($data);
        $data=addslashes($data);
        $data=htmlspecialchars($data);
        
        return $data ;
}
function recuperation($data)
{
        $data=stripslashes($data);
        return $data ;
}
?>