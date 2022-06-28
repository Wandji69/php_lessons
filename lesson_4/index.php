<?php
include_once "includes/db.php";

// $sql = "SELECT * FROM `users`;";
// $res = mysqli_query($conn, $sql);
// $rescheck = mysqli_num_rows($res);
// if ($rescheck > 0) {
//     while ($row = mysqli_fetch_assoc($res)) {
//         echo $row['uid'] . "<br/>";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect to Database</title>
</head>

<body>
    <form action="includes/signup.php" method="POST">
        <input type="text" name="first" placeholder="firstname">
        <br>
        <input type="text" name="last" placeholder="lastname">
        <br>
        <input type="text" name="email" placeholder="email">
        <br>
        <input type="text" name="username" placeholder="username">
        <br>
        <input type="password" name="pwd" placeholder="password">
        <br>
        <button type="submit" name="submit">sign up</button>
    </form>
</body>

</html>