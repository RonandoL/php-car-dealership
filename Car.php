<?php
class Car
{
    public $make_model;
    public $price;
    public $miles;
    public $status;

    function __construct($make_model, $price, $miles, $status = "new")
    {
        $this->make_model = $make_model;
        $this->price = $price;
        $this->miles = $miles;
        $this->status = $status;
    }
}

$car1 = new Car("2014 Porsche 911", 114991, 0);
$car2 = new Car("2011 Ford F450", 55995, 0);
$car3 = new Car("2013 Lexus RX 350", 44700, 0);
$car4 = new Car("Mercedes Benz CLS550", 39900, 37979);
$car5 = new Car("Ford F150", 24900, 45979, "used");

$cars = array($car1, $car2, $car3, $car4, $car5);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->price < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                    echo "<li> $car->status </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
