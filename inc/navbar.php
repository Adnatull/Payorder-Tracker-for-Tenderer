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
<a href="index.php" class="float left">Home</a>
<a href="index.php" class="float right pl-5">Login</a>




<?php if ($data->logged_in): ?>
    <?php if($data->role == "admin"): ?>
        <h1>Welcome admin</h1>
        <a href="index.php?create_user='1'">Create User</a>
        <h1>See all users</h1>
        <h1>See all payordes info</h1>
        <h1>Search</h1>
    <?php endif ?>
    <a href="index.php?logout='1'">Logout</a>
<?php endif ?>
