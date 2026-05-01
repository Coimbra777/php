<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>

<body>
    <pre>
        <h1>Herança</h1>

        <?php

        require_once "Pessoa.php";
        require_once "Visitante.php";
        require_once "Aluno.php";
        require_once "Bolsista.php";
        // $p1 = new Pessoa();
        $v1 = new Visitante();

        $v1->setNome("Gabriel");
        $v1->setIdade(20);
        $v1->setSexo("M");

        $a1 = new Aluno();
        $a1->setNome("João");
        $a1->setIdade(20);
        $a1->setSexo("M");
        $a1->setMatricula("123456");
        $a1->setCurso("PHP");
        $a1->pagarMensalidade();

        print_r($a1);

        $b1 = new Bolsista();
        $b1->setNome("Maria");
        $b1->setIdade(20);
        $b1->setSexo("F");
        $b1->setMatricula("123456");
        $b1->setCurso("PHP");
        $b1->setBolsa(50);
        $b1->pagarMensalidade();
        print_r($b1);
        ?>

    </pre>
</body>

</html>