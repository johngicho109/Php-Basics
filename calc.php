<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calc.php" method="post">
        Number 1: <input type="number" step="0.1" name="num1"><br>
        Number 2: <input type="number" name="num2"><br>
        Operator: <input type="text" name="op"><br>
        <input type="submit">
    </form>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];
    if($op == "+"){
        echo $num1 + $num2;
    }elseif($op=="-"){
        echo $num1 - $num2;
    }elseif($op == "*"){
        echo $num1 * $num2;
    }elseif($op == "/"){
        echo $num1 / $num2;
    }else{
        echo "Enter a valid math operator";
    }
    ?>
</body>
</html>