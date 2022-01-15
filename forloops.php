<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For loops</title>
</head>
<body>
    <?php
    for ($i=0; $i < 5; $i++) { 
        echo("Hello $i");
    }
    $evenNumbers = array(2,4,6,8,10,12,14,16,18,20);
    for ($i=0; $i < count($evenNumbers) ; $i++) { 
        echo $evenNumbers[$i];
    }
    ?>
</body>
</html>