<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>

<body>
    <pre>
        <h1>Livros</h1>

        <?php
        require_once "Pessoa.php";
        require_once "Funcionario.php";
        require_once "Professor.php";
        require_once "Aluno.php";

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Gabriel");
        $p2->setNome("João");
        $p3->setNome("Maria");
        $p4->setNome("Pedro");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        echo "<br>";

        $p1->fazerAniversario(20);
        $p2->fazerAniversario(21);
        $p3->fazerAniversario(22);
        $p4->fazerAniversario(23);

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);

        ?>

    </pre>
</body>

</html>