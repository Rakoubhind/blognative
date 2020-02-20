<?php
	$fileName = $_FILES['imageart']['name'];
        $fileTmpName = $_FILES['imageart']['tmp_name'];
        $fileError = $_FILES['imageart']['error'];
        if($fileError === 0){
            $fileDestination = 'uploads/article/'.$fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
        }else {
            echo "There was an error";
        }
?>