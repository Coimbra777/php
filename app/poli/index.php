<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>

<body>
    <pre>
        <h1>Polimorfismo</h1>

        <?php
        require_once "Mamifero.php";
        require_once "Reptil.php";
        require_once "Peixe.php";
        require_once "Ave.php";
        echo "</br>";

        $mamifero = new Mamifero();
        $mamifero->emitirSom();
        echo "</br>";
        $mamifero->locomover();
        echo "</br>";
        $mamifero->alimentar();
        echo "</br>";
        $mamifero->getCorPelo("Azul");
        echo "</br>";
        echo "</br>";


        $reptil = new Reptil();
        $reptil->emitirSom();
        echo "</br>";
        $reptil->locomover();
        echo "</br>";
        $reptil->alimentar();
        echo "</br>";
        $reptil->getCorEscama("Verde");
        echo "</br>";
        echo "</br>";

        $peixe = new Peixe();
        $peixe->emitirSom();
        echo "</br>";
        $peixe->locomover();
        echo "</br>";
        $peixe->alimentar();
        echo "</br>";
        $peixe->soltarBolha();
        echo "</br>";
        echo "</br>";

        $ave = new Ave();
        $ave->emitirSom();
        echo "</br>";
        $ave->locomover();
        echo "</br>";
        $ave->alimentar();
        echo "</br>";
        $ave->fazerNinho();
        echo "</br>";
        echo "</br>";
        ?>
    </pre>
</body>

</html>