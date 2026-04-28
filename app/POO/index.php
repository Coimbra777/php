<?php

require_once "Caneta.php";

$c1 = new Caneta();
$c1->modelo = "Bic";
$c1->cor = "Azul";
$c1->ponta = 0.5;
$c1->carga = 100;
$c1->tampada = false;
$c1->status = false;

$c1->tampar();
$c1->rabiscar();
echo "<br>";
$c1->destampar();
echo "<br>";


echo "Modelo: {$c1->modelo}";
echo "<br>";
echo "Cor: {$c1->cor}";
echo "<br>";
echo "Ponta: {$c1->ponta}";
echo "<br>";
echo "Carga: {$c1->carga}";
echo "<br>";
echo "Tampada: {$c1->tampada}";
echo "<br>";
echo "Status: {$c1->status}";
echo "<br>";
