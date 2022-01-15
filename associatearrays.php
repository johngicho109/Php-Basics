<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative array</title>
</head>
<body>
    <form action="associatearrays.php" method="post">
        Student Name: <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
    $grades = array("John"=>"A","Mercy"=>"B-","Maggie"=>"A+");
    echo($grades["John"]);
    echo($grades["Maggie"]);
    $grades["Mercy"] = "B";
    echo($grades["Mercy"]);
    echo("=============================================");
    echo($grades[$_POST["student"]]);
    ?>
</body>
</html>