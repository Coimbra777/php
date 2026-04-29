<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>

<body>
    <pre>
        <h1>Lutadores</h1>

        <?php
        require_once "Lutador.php";

        $lutador1 = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $lutador2 = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $lutador3 = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $lutador4 = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        $lutador5 = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $lutador6 = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

        $lutador1->apresentar();
        $lutador2->apresentar();
        $lutador3->apresentar();
        $lutador4->apresentar();
        $lutador5->apresentar();
        $lutador6->apresentar();

        ?>
    </pre>
</body>

</html>