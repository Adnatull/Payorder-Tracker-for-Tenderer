<?php    
    require_once("inc/header.php");
    $data = Session::getStart();
    if (isset($data->logged_in)) {
        if ($data->role == "admin") {
            if (isset($data->create_user)) {
                require_once ("inc/engine/create_user.php");
            } else if (isset($data->list_users)) {
                require_once ("inc/engine/list_users.php");
            } else if (isset($data->edit_user)) {
                require_once ("inc/engine/edit_user.php");
            } else {
                require_once ("inc/engine/dashboard.php");
            }    
        }
        else {
            require_once ("inc/engine/entry.php");
            
        }
    } else {
        require_once ("inc/engine/login.php");
        
    }

    require_once("inc/footer.php")
?>