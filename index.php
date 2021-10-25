<?php

require_once 'Cars.php';

$car = new Car('green', 4, 'electric');


try{
    echo $car->start() . '</br>';
}
catch (Exception $e)
{
    echo $e->getMessage() . '</br>';
    echo $car->setParkBrake() . '</br>';
}
finally
{
    echo "Ma voiture roule comme un donut.</br>"; 
}



echo $car->setParkBrake();


try{
    echo $car->start() . '</br>';
}
catch (Exception $e)
{
    echo 'Attention: ' . $e->getMessage() . '</br>';
    echo $car->setParkBrake() . '</br>';
}
finally
{
    echo "Ma voiture roule comme un donut.</br>";
}