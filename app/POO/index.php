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
        require_once "Livro.php";
        require_once "Pessoa.php";

        $p1 = new Pessoa("Gabriel", 20, "M");
        $p2 = new Pessoa("João", 22, "M");
        $l1 = new Livro("PHP", "Gabriel", 300, $p1);
        $l2 = new Livro("Java", "João", 200, $p2);

        echo "<br>";
        echo $l1->detalhes();
        echo "<br>";
        echo "<br>";
        echo $l2->detalhes();
        echo "<br>";
        $l1->abrir();
        $l1->folhear(100);
        echo "<br>";
        echo $l1->detalhes();
        $l2->abrir();
        $l2->folhear(50);
        echo "<br>";
        echo "<br>";

        echo $l2->detalhes();
        ?>
    </pre>
</body>

</html>