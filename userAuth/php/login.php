<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username']; //finish this line
    $password = $_POST['password']; //finish this

    loginUser($email, $password);
}

function loginUser($email, $password)
{
    $fp = fopen("../storage/users.csv", 'w');

    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
}

echo "HANDLE THIS PAGE";
