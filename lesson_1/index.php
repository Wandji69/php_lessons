<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <input type="text" name="number1" placeholder="Number One">
        <input type="text" name="number2" placeholder="Number two">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Substract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button name="submit" value="submit" value="submit">Calculate</button>
    </form>
    <p>The answer is: </p>
    <?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['number1'];
        $result2 = $_GET['number2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "None":
                echo "you need to select a method";
                break;
            case "Add":
                echo $result1 + $result2;
                break;
            case "Substract":
                echo $result1 - $result2;
                break;
            case "Multiply":
                echo $result1 * $result2;
                break;
            case "Divid":
                echo $result1 / $result2;
                break;
        }
    }
    ?>
</body>

</html>