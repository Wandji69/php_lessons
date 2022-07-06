<?php
include_once "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>

<body>
    <?php
    /**************************************
     * using prepare statement to read and 
     * insert data to Database 
     *************************************/
    //Template
    $sql = "SELECT * FROM `users` WHERE `uid`=?;";
    // Prepare Statement
    $stmt = mysqli_stmt_init($conn);
    //Prepare the prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else {
        //Bind the parameters to the place holder
        mysqli_stmt_bind_param($stmt, 's', $data);
        // Run parameters inside database
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($res)) {
            echo $row['uid'] . "<br />";
        }
    }

    ?>
</body>

</html>