
<form method="post" action="index.php">
    <label for="create_username">Username</label>
    <input type="text" id="create_username" class="create_input" name="username"  required>
    
    <label for="create_password">Password</label>
    <input type="password" name="password" id="create_password" class="create_password" autocomplete="off" required>

    <label for="create_password1">Confirm Password</label>
    <input type="password" name="confirm_password" id="create_password1" class="create_password" autocomplete="off" required>
    
    <label for="create_role">Role</label>
    <input type="text" name="role" id="create_role" class="create_role">

    <label for="fullname">Full Name</label>
    <input type="text" name="fullname" id="fullname" class="fullname">
    
    <input type="submit"  name="create">

</form>
