<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    $friends = array("Lizz<br> ","Alexis<br>","Anna<br>","Anita<br>","Mercy<br>",20);
    echo($friends[0]);
    echo($friends[1]);
    $friends[1] = "Bellindah<br>";
    echo($friends[1]);
    $friends[6] = "ceasey";
    echo($friends[6]);
    echo count($friends);
    ?>
</body>
</html>