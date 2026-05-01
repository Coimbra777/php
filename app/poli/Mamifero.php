<?php

require_once "Animal.php";

class Mamifero extends Animal
{
    protected string $corPelo;


    public function emitirSom(): void
    {
        echo "Som de mamífero";
    }

    public function locomover(): void
    {
        echo "Correndo";
    }

    public function alimentar(): void
    {
        echo "Mamando";
    }

    public function getCorPelo(string $corPelo): void
    {
        echo "Cor do pelo: {$corPelo}";
    }
}
