<html>
<body>

<?php

class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}.<br>";
    }
}

class Cherry extends Fruit
{
    public $weight;

    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro()
    {
        echo "A {$this->name} is a fruit, its color is {$this->color} and its weight is {$this->weight} grams.";
    }
}

$fruit = new Fruit("Apple", "Red");
$fruit->intro();

echo "<br><br>";

$cherry = new Cherry("Cherry", "Red", 10);
$cherry->intro();

?>

</body>
</html>