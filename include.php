<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include in php</title>
</head>
<body>
    <?php
    $title = "Hot Tech";
    $author = "Joe Tech";
    $wordCount = 400;
    include "nav.html";
    include "header.php";
    include "utils.php";
    greetings("Joe");
    greetings("Lizz");
    ?>
</body>
</html>