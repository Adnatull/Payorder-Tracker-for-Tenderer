<?php
    if(isset($_GET['create_user'])) {
        $data->create_user = TRUE;
        header("Location: index.php");
    }
?>
<a href="index.php">Home</a>
<?php if($data->role == "admin"): ?>
    <h1>Welcome admin</h1>
    <a href="index.php?create_user='1'">Create User</a>
    <h1>Create User</h1>
    <h1>Search</h1>
<?php endif ?>
