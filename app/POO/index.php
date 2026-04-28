<?php

require_once "Caneta.php";

$c1 = new Caneta();
$c1->modelo = "Bic";
$c1->cor = "Azul";

$c1->rabiscar();
echo "<br>";

echo "Modelo: {$c1->modelo}";
echo "<br>";
echo "Cor: {$c1->cor}";
echo "<br>";
