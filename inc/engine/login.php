<?php


require_once ($_SERVER['DOCUMENT_ROOT']."/inc/classes/login.php");


$login = Login::getLogin();



if ($login->errors) {
    
   // header("Location: search.php");
    foreach ($login->errors as $error) {
        echo $error;
       

    }
}


require_once ($_SERVER['DOCUMENT_ROOT'].'/views/login.php');
?>