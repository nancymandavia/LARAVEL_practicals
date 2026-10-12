<!DOCTYPE html>
<html>
<body>

<h1>The Fruit Program</h1>

<?php

class Fruit
{
    public $name;
    public $color;

    // Constructor
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    // Get fruit name
    function get_name()
    {
        return $this->name;
    }

    // Get fruit color
    function get_color()
    {
        return $this->color;
    }
}

// Creating objects using constructor
$apple = new Fruit("Apple", "Red");
$banana = new Fruit("Banana", "Yellow");
$mango = new Fruit("Mango", "Yellow");
$orange = new Fruit("Orange", "Orange");
$grapes = new Fruit("Grapes", "Green");

// Displaying values
echo $apple->get_name() . "<br>";
echo $apple->get_color() . "<br><br>";

echo $banana->get_name() . "<br>";
echo $banana->get_color() . "<br><br>";

echo $mango->get_name() . "<br>";
echo $mango->get_color() . "<br><br>";

echo $orange->get_name() . "<br>";
echo $orange->get_color() . "<br><br>";

echo $grapes->get_name() . "<br>";
echo $grapes->get_color() . "<br>";

?>

</body>
</html>
