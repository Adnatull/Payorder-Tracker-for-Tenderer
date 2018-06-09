<?php
    if(isset($_GET['create_user'])) {
        $data->create_user = TRUE;
        $data->current_page = "Create new user";
        header("Location: index.php");
    }
    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION);
        header("Location: index.php");
    }
?>