<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
    function greetings($name,$age){
        echo("Hello $name, You are $age");
    };
    greetings("Joe",27);
    greetings("Lizz",19);
    ?>
</body>
</html>