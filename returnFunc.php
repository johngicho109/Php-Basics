<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reurn statement In functions</title>
</head>
<body>
    <?php
    function cube($x){
        return $x*$x*$x;
    };
    $results = cube(3);
    echo($results);
    ?>
</body>
</html>