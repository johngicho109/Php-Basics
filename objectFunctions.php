<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Functions</title>
</head>
<body>
    <?php
    class Student{
        function __construct($name,$mojor,$gpa){
            $this->name = $name;
            $this->mojor = $mojor;
            $this->gpa = $gpa;
        }

        function hasHonors(){
            if($this->gpa >= 3.5){
                return "true";
            }else{
                return "false";
            }
        }
    }

    $student1 = new Student("Joe","statistics",2.9);
    $student2 = new Student("Maggie","Education",3.6);

    echo $student1->name;
    echo $student1 -> hasHonors();
    echo $student2 -> hasHonors();

    ?>
</body>
</html>