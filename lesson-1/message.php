<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>

<body>
    <?php
    $dayOfWeek = date("w");
    switch ($dayOfWeek) {
        case 1:
            echo "<p>its Monday</p>";
            break;
        case 2:
            echo "<p>its Tuesday</p>";
            break;
        case 3:
            echo "<p>its Wednesday</p>";
            break;
        case 4:
            echo "<p>its Thursday</p>";
            break;
        case 5:
            echo "<p>its Firday</p>";
            break;
        case 6:
            echo "<p>its Saturday</p>";
            break;
        case 7:
            echo "<p>its Sunday</p>";
            break;
    }
    ?>
</body>

</html>