<?php 
    require_once("inc/header.php");
    if (isset($_SESSION['logged_in'])) {
        if ($_SESSION['role']=="admin") {
            if (isset($_SESSION['create_user'])) {
                require_once ("views/create_user.php");
            } else if (isset($_SESSION['list_users'])) {
                require_once ("views/list_users.php");
            } else if (isset($_SESSION['edit_user'])) {
                require_once ("views/edit_user.php");
            } else {
                require_once ("views/dashboard.php");
            }    
        }
        else {
            require_once ("views/entry.php");
        }
    } else {
        require_once ("views/login.php");
    }

    require_once("inc/footer.php")
?>