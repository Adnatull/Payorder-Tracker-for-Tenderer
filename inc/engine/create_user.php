<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/inc/classes/create_user.php");
$create = Create::getCreateUser();
if ($create->errors) {
    // header("Location: search.php");
     foreach ($login->errors as $error) {
         echo $error; 
     }
 }
?>
<h1>Welcome to create user page. </h1>

<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/views/create_user.php");
?>