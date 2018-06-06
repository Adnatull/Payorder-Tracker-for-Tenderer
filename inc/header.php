<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/inc/db/db.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/inc/classes/session.php");

$data = Session::getStart();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php
        if (isset($data->current_page)) { 
            echo $data->current_page; 
        } else {
            echo "Login page";
        }
        ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />


    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/main.js"></script>
</head>
<body>
<h1 class="text-warning">Hi pabel</h1>

<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/inc/navbar.php");
?>

