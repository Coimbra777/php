<?php

require_once "Mamifero.php";

class Canguru extends Mamifero
{
    public function locomover(): void
    {
        echo "Saltando";
    }
    public function emitirSom(): void
    {
        echo "Som de canguru";
    }

    public function alimentar(): void
    {
        echo "Comendo folhas";
    }

    public function usarBolsa(): void
    {
        echo "Usando bolsa";
    }
}
