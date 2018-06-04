<?php    
    require_once ($_SERVER['DOCUMENT_ROOT']."/inc/header.php");

    if (isset($data->logged_in)) {
        if ($data->role == "admin") {
            if (isset($data->create_user)) {
                require_once ($_SERVER['DOCUMENT_ROOT']."/inc/engine/create_user.php");
            } else if (isset($data->list_users)) {
                require_once ($_SERVER['DOCUMENT_ROOT']."/inc/engine/list_users.php");
            } else if (isset($data->edit_user)) {
                require_once ($_SERVER['DOCUMENT_ROOT']."/inc/engine/edit_user.php");
            } else {
                require_once ($_SERVER['DOCUMENT_ROOT']."/inc/engine/dashboard.php");
            }    
        }
        else {
            require_once ($_SERVER['DOCUMENT_ROOT']."/inc/engine/entry.php");
        }
    } else {
        require_once ($_SERVER['DOCUMENT_ROOT']."/inc/engine/login.php");
    }
    require_once($_SERVER['DOCUMENT_ROOT']."/inc/footer.php")
?>