<?php

require_once "Caneta.php";

$c1 = new Caneta();
$c1->modelo = "Bic";
$c1->cor = "Azul";

$c1->rabiscar();
echo "<br>";

$c1->setPonta(0.5);
echo "<br>";
echo "Ponta: {$c1->getPonta()}";
echo "<br>";

echo "Modelo: {$c1->modelo}";
echo "<br>";
echo "Cor: {$c1->cor}";
echo "<br>";
