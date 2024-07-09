<?php
    include "../classes/User.php";

    # Create an object
    $user = new User;

    # Call the update method
    $user->update($_POST, $_FILES);
    # $_POST = [firstname, lastname, username]
    # $_FILES = image uploaded by the user (photo/avatar)
?>