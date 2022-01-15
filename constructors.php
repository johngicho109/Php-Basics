<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructors</title>
</head>
<body>
    <?php
    class Book{
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle,$aAuthor,$aPages){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }
    $book1 = new Book("Harry potter","JK Rollings",500);
    $book2 = new Book("Lord of rings","Tolkien",900);

    $book1->title = "Hunger game";

    echo $book1 -> title;

    // $book1 = new Book();
    // $book1 -> title = "Harry potter";
    // $book1 -> author = "JK Rollings";
    // $book1 -> pages = 500;
    ?>
</body>
</html>