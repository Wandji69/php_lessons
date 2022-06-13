<?php
if (isset($_POST['submit'])) {
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $dateOfBirth = $_POST['date'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];


    registerUser($username, $email, $password);
}

function registerUser($username, $email, $dateOfBirth, $gender, $country)
{
    //save data into the file
    $file_open = fopen("userdata.csv", "w");
    $no_rows = count(file("userdata.csv"));
    if ($no_rows > 1) {
        $no_rows = ($no_rows - 1) + 1;
    }
    $form_data = array(
        'sr_no' => $no_rows,
        'name' => $username,
        'email' => $email,
        'dateOfBirth' => $dateOfBirth,
        'gender' => $gender,
        'country' => $country
    );

    fputcsv($file_open, $form_data);

    // echo "OKAY";
}
echo "User Successfully registered";
