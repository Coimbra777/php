<?php

require_once "Mamifero.php";

class Cachorro extends Mamifero
{

    public function emitirSom(): void
    {
        echo "Latindo";
    }
    public function locomover(): void
    {
        echo "Correndo";
    }
    public function alimentar(): void
    {
        echo "Comendo ração";
    }

    public function enterrarOsso(): void
    {
        echo "Enterrando osso";
    }
    public function abanarRabo(): void
    {
        echo "Abanando rabo";
    }
}
