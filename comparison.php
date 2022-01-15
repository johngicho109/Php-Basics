<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>
<body>
    <?php
    function getMax($x,$y){
        if($x > $y){
            return $x;
        }elseif($x < $y){
            return $y;
        }else{
            return null;
        }
    }
    echo(getMax(90,90));

    function getMaxThree($num1,$num2,$num3){
        if($num1 >= $num2 && $num1 >= $num3){
            return $num1;
        }elseif($num2 >= $num1 && $num2 > $num3){
            return $num2;
        }else{
            return $num3;
        }
    }
    echo getMaxThree(10,9,1);
    echo getMaxThree(10,12,0);
    echo(getMaxThree(10,12,15));

    ?>
</body>
</html>