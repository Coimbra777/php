<?php

class Product
{
    public $name;
    public $description;
    public $price;
}


$tv = new Product();
$tv->name = "TV";
$tv->description = "Smart TV";
$tv->price = 1000;


echo $tv->name . "<br>";
echo $tv->description  . "<br>";
echo $tv->price  . "<br>";
echo "<br>";

$bicicleta = new Product();
$bicicleta->name = "Bicicleta";
$bicicleta->description = "Bicicleta de montanha";
$bicicleta->price = 500;

echo $bicicleta->name . "<br>";
echo $bicicleta->description  . "<br>";
echo $bicicleta->price  . "<br>";
