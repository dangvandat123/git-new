<?php
class Animal{
    public $name;
    public $hunt=false;
    public function __construct($name,$hunt="false"){
        $this->name=$name;
        $this->hunt=$hunt;
    }
}
class Dog extends Animal{
    public function makeSound(){
        echo "Woff,Woff";
    }
}
class Tiger extends Animal{
    public function makeSound(){
        echo "Grr,Grr";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4</title>
</head>
<body>
    <?php
    $dog= new Dog("corggi");
    echo $dog->name;
    echo "<br>";
    echo "Hunt:".$dog->hunt;
    echo "<br>";
    $dog->makeSound();
    echo "<br>";
    $tiger= new Tiger("blackTiger","true");
    echo $tiger->name;
    echo "<br>";
    echo "Hunt:".$tiger->hunt;
    echo "<br>";
    $tiger->makeSound();
    ?>
</body>
</html>