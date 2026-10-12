<!DOCTYPE html>
<html>
<body>

<h1>The Fruit Program</h1>

<?php

class Fruit
{
    public $name;
    public $color;

    // Set fruit name
    function set_name($name)
    {
        $this->name = $name;
    }

    // Get fruit name
    function get_name()
    {
        return $this->name;
    }
}

// Creating objects
$apple = new Fruit();
$banana = new Fruit();
$mango = new Fruit();
$orange = new Fruit();
$grapes = new Fruit();

// Setting fruit names
$apple->set_name("Apple");
$banana->set_name("Banana");
$mango->set_name("Mango");
$orange->set_name("Orange");
$grapes->set_name("Grapes");

// Displaying fruit names
echo $apple->get_name() . "<br>";
echo $banana->get_name() . "<br>";
echo $mango->get_name() . "<br>";
echo $orange->get_name() . "<br>";
echo $grapes->get_name() . "<br>";

?>

</body>
</html>
