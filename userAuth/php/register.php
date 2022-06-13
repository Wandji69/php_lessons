<?php
if (isset($_POST['submit'])) {
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    registerUser($username, $email, $password);
}

function registerUser($username, $email, $password)
{
    //save data into the file
    $file_open = fopen("storage/users.csv", "w");
    $no_rows = count(file("storage/users.csv"));
    if ($no_rows > 1) {
        $no_rows = ($no_rows - 1) + 1;
    }
    $form_data = array(
        'sr_no' => $no_rows,
        'name' => $username,
        'email' => $email,
        'password' => $password
    );

    fputcsv($file_open, $form_data);

    // echo "OKAY";
}
echo "User Successfully registered";
