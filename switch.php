<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch statement</title>
</head>
<body>
    <form action="switch.php" method="post">
        Grade: <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
    $grade =  $_POST["grade"];
    // echo($_POST["grade"]);
    switch($grade){
        case "A": echo("You did well");
        break;
        case "B": echo("You did pretty good");
        break;
        case "C":echo("You did poorly");
        break;
        case "D":echo("You did very bad");
        break;
        case "F":echo("You failed");
        default: echo("Invalid grade");
    }
    ?>
</body>
</html>