<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
    echo("Mathematician");
    $name = "Joe Tech";
    echo($name);
    echo(strtolower($name));
    echo(strtoupper($name));
    echo(strlen($name));
    echo($name[0]);
    echo($name[-1]);
    $name[0] = "G";
    echo($name);
    echo str_replace("joe","John",$name);
    // echo($name2);
    echo substr($name,4);
    echo substr($name,4,3)

    ?>
</body>
</html>