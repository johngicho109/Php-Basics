<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <form action="input.php" method="get">
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Age</label>
        <input type="number" name="age">
        <input type="submit">
    </form>
    <?php 
    $name = $_GET["name"];
    $age = $_GET["age"];
    echo($name);
    echo($age);
    ?>
</body>
</html>