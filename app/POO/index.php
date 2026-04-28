<?php

require_once "Caneta.php";

$c1 = new Caneta();
$c1->modelo = "Bic";

$c1->setModelo("Bic");
echo "<br>";
echo "Modelo: {$c1->getModelo()}";
echo "<br>";

$c1->setPonta(0.5);
echo "<br>";
echo "Ponta: {$c1->getPonta()}";
echo "<br>";
echo "<br>";

print_r($c1);
