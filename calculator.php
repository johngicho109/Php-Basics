<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php">
        <label for="">Enter a number</label>
        <input type="number" name="num1">
        <label for="">Enter a number</label>
        <input type="number" name="num2">
        <input type="submit">
    </form>
    <?php
        echo($_GET["num1"] + $_GET["num2"]);
        ?>
</body>
</html>