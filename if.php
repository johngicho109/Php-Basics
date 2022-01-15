<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If statement</title>
</head>
<body>
    <?php
    $isMale = true;
    $isTall = false;
    if($isMale && $isTall){ //both condition have to be satisfied
        echo("You are a tall male");
    } elseif($isMale && !$isTall){
        echo("You are a short male");
    } elseif(!$isMale && $isTall){
        echo("You are not male and tall");
    }
    else{
        echo("You are not male and not tall");
    };

    
    if($isMale || $isTall){ //only one condition should be satisfied
        echo("You are a tall male");
    }else{
        echo("You are not male");
    };
    ?>
</body>
</html>