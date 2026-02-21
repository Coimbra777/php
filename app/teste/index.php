<?php
// $nome = "Gabriel";
// echo "Olá {$nome}123";

// echo "<br>";

// $nome = "Gabriel";
// echo "Olá $nome";

// echo "<br>";

// $valor = 10;
// $valor10 = 999;
// $valor10x = null;

// echo "Teste $valor10x";

// echo "<br>";

// var_dump("10abc" == 10);

// echo "<br>";

// var_dump("0e12345" == 0);

// declare(strict_types=1);

// function soma(int $a, int $b): int {
//     return $a + $b;
// }

// echo soma(5.7, 2);

$a = [];
$a["01"] = "A";
$a[1] = "B";

var_dump($a);

echo "<br>";

var_dump(array_keys(["3" => "x"]));

echo "<br>";
$a = [];
$a["1"] = "A";
$a[1] = "B";

var_dump($a);

echo "<br>";

$a = [];
$a[true] = "A";
$a[1] = "B";
$a[false] = "C";
$a[0] = "D";

var_dump($a);

echo "<br>";

$a = [];
$a[] = "A";
$a[2] = "B";
$a[] = "C";

var_dump($a);

echo "<br>";

$a = [5 => "A"];
$a[] = "B";
$a[1] = "C";
$a[] = "D";

var_dump($a);