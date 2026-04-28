<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>

<body>
    <pre>
        <h1>Controle Remoto</h1>

        <?php
        require_once "ControleRemoto.php";
        $c = new ControleRemoto();
        $c->ligar();
        $c->abrirMenu();

        // $c->fecharMenu();
        // $c->maisVolume();
        // $c->menosVolume();
        // $c->ligarMudo();
        // $c->desligarMudo();

        echo "<br>";
        print_r($c);
        ?>
    </pre>
</body>

</html>