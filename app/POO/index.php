<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>

<body>
    <pre>
        <h1>Conta Banco</h1>

        <?php
        require_once "ContaBanco.php";

        $p1 = new ContaBanco();
        $p1->setNumConta(1111);
        $p1->setTipo("CC");
        $p1->setDono("Jubileu");
        $p1->abrirConta("CC");
        $p1->depositar(300);
        $p1->sacar(200);
        $p1->pagarMensal(12);
        echo "<br>";
        print_r($p1);

        echo "<br>";

        $p2 = new ContaBanco();
        $p2->setNumConta(2222);
        $p2->setTipo("CP");
        $p2->setDono("Creuza");
        $p2->abrirConta("CP");
        $p2->depositar(500);
        $p2->sacar(100);
        $p2->pagarMensal(20);
        echo "<br>";
        print_r($p2);

        echo "<br>";

        $p3 = new ContaBanco();
        $p3->setNumConta(3333);
        $p3->setTipo("CC");
        $p3->setDono("João");
        $p3->abrirConta("CC");
        $p3->depositar(100);
        $p3->sacar(150);
        $p3->pagarMensal(12);
        echo "<br>";
        print_r($p3);

        echo "<br>";

        $p4 = new ContaBanco();
        $p4->setNumConta(4444);
        $p4->setTipo("CP");
        $p4->setDono("Maria");
        $p4->abrirConta("CP");
        $p4->depositar(1000);
        $p4->sacar(150);
        $p4->pagarMensal(20);
        echo "<br>";
        print_r($p4);
        ?>
    </pre>
</body>

</html>