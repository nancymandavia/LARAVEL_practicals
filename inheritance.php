<html>
<body>

<?php

class Fruit
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function display()
    {
        echo "Fruit Name: " . $this->name . "<br>";
        echo "Fruit Color: " . $this->color . "<br>";
    }
}

class Apple extends Fruit
{
    public $taste;

    function setTaste($taste)
    {
        $this->taste = $taste;
    }

    function showTaste()
    {
        echo "Apple Taste: " . $this->taste;
    }
}

$apple = new Apple("Apple", "Red");

$apple->display();

$apple->setTaste("Sweet");

$apple->showTaste();

?>

</body>
</html>